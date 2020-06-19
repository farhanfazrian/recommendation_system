<?php
class ControllerPenilaian extends Controller{
// contoh fungsi yang mengadopsi class AppController
	//atribut hanya untuk penampilan perhitungan
	protected $kumpulanHasil=[];
	protected $kumpulanHasilItem=[];
	protected $kumpulanRekomendasi=[];
	protected $detailRekomendasi=[];
	protected $detailRekomendasiItem=[];
	protected $kumpulanPrediksi=[];
	protected $kumpulanPrediksiItem=[];
	protected $produkSama=[];
	function render(){
		$this->f3->set('scr',$score);
		$template = new Template;
		echo $template->render('ViewPenilaian.htm');
	}
	function inputRating($mode){
		$this->getPengguna();
		$idproduk =  $this->f3->get('POST.Epiphone');
		$idproduk = (int)$idproduk;
		$nilaiRating =  $this->f3->get('POST.inputRating');
		$nilaiRating=(int)$nilaiRating;
		$review="";
		$modelRating= new ModelPenilaian($this->db);
		$idpengguna= $this->f3->get('SESSION.user');
		if(!is_null( $this->f3->get('POST.review'))){
			$review = $this->f3->get('POST.review');
			$review = (String) $review;
		}
		// <=== penanganan bagian input awal saat register ===>
		if(!is_null($mode)&& $nilaiRating==0){
			$nilaiRating+=2;
			$modelRating->addRating(0,0,$nilaiRating,$idproduk,$idpengguna,$review);	
		}
		else if (!is_null($mode)&& $nilaiRating ==1){
			$nilaiRating+=1;
			$modelRating->addRating(0,0,$nilaiRating,$idproduk,$idpengguna,$review);	
		}
		else{
			

		// <=== Akhir penanganan bagian input awal saat register ===>

		//proses input rating
			
			$query_res = $modelRating->getPenilaianSpesifik($idpengguna,$idproduk);
			$jumlahRow = (int) count($query_res);
		//cek kondisi status penilaian user $idpengguna terhadap produk $idproduk
			if($jumlahRow > 0){
				foreach($query_res as $row){
			// 	$hasil = $row['nilaiMelihat']+abs($row['nilaiPembelian'])+$row['nilaiRating'];		
			// 	$hasil = ((float) $hasil ) - $row['nilaiRating'] ;
			// 	$hasil = ($hasil + $nilaiRating)/3.0;
			// //update nilai rating
			// 	$hasil = (float)round($hasil,2);
					$modelRating->updateRating($idpengguna,$idproduk,$review,$nilaiRating);
					$modelRating->updateStatusPembelian(abs($row['nilaiPembelian']),$idpengguna,$idproduk);
				}
			}
			else {		

			// $hasil = ($nilaiRating/3.0)*3;
				$modelRating->addRating(0,0,$nilaiRating*3,$idproduk,$idpengguna,$review);		
			}
		//set id Produk untuk load page 
			$statusPembelian=$modelRating->getStatusPembelian($idpengguna,$idproduk)[0];
			$this->f3->set('nilaiPembelian',$statusPembelian['nilaiPembelian']);
			$produk= new ModelProduk($this->db);
			$prd=$produk->getSpesifikProduk($idproduk);
			$this->f3->set('produk',$prd);
			$template = new Template;
			echo $template->render('elektrikGitar/detail_produk.htm');
		}
	}

	
	function inputKlik($idU,$id){
		$this->getPengguna();
		$hasil = 1;
		$modelKlik= new ModelPenilaian($this->db);
		$query_res = $modelKlik->getPenilaianSpesifik($idU,$id);
		$jumlahRow = (int) count($query_res);
		//  udah ada nilai untuk produk $id
		if($jumlahRow>0){
			foreach($query_res as $row){			
				// $hasil = $row['nilaiMelihat']+abs($row['nilaiPembelian'])+$row['nilaiRating'];
				$nilaiMelihat = $row['nilaiMelihat']+9;
				// $hasil= ($hasil+1)/3.0;
				// $hasil = (float)round($hasil,2);
				$modelKlik->updateKlik($nilaiMelihat,$idU,$id);	
			}
		}
		// belum ada nilai untuk produk $id
		else {			
			// $hasil= 3/3.0;
			// $hasil = (float)round($hasil,2);
			$modelKlik->addRating(0,3,0,$id,$idU,$review);			
		}			
	}
	function inputPembelian(){
		$this->getPengguna();
		$modelPembelian = new ModelPenilaian($this->db);
		$idproduk =  $this->f3->get('POST.Epiphone');
		$id = (int) $idproduk;
		$idpengguna= $this->f3->get('SESSION.user');
		$idU = (int) $idpengguna;
		$query_res = $modelPembelian->getPenilaianSpesifik($idpengguna,$idproduk);;
		$jumlahRow = (int) count($query_res);
		if($jumlahRow>0){
			foreach($query_res as $row){
				// $hasil = $row['nilaiMelihat']+abs($row['nilaiPembelian'])+$row['nilaiRating'];
				// $hasil=($hasil + 5)/3;
				$nilaiPembelian=abs($row['nilaiPembelian'])+5;
				$hasil = (float)round($hasil,2);
				$modelPembelian->updateStatusPembelian(($nilaiPembelian*-1),$idU,$id);
			}
		}
		else {		
			// $hasil= 5/3.0;
			// $hasil = (float)round($hasil,2);
			$modelPembelian->addRating((5*-1),0,0,$id,$idU,$review);			
		}
		//mode Rating
		$statusPembelian=$modelPembelian->getStatusPembelian($idpengguna,$idproduk)[0];
		$this->f3->set('nilaiPembelian',$statusPembelian['nilaiPembelian']);
		//set id Produk untuk load page 			
		$produk= new ModelProduk($this->db);
		$prd=$produk->getSpesifikProduk($idproduk);
		$this->f3->set('produk',$prd);
		$template = new Template;
		echo $template->render('elektrikGitar/detail_produk.htm');
	}
	function HitungPearson($pengguna1,$pengguna2,$hasilOlahProduk){
		$pengguna = new ModelPengguna($this->db);
		$score1 = 0;
		$score2= 0;
		$counter = 0;
		$hasilAtas = 0;
		$hasilPenyebut1 = 0;
		$hasilPenyebut2 = 0;
		$produkAda = [];
		$produkSama = "";
		$hasil = 0;

		//looping untuk  menyimpan kesamaan antar produk 
		foreach ($hasilOlahProduk[$pengguna1] as $idproduk => $value) {
			if(isset($hasilOlahProduk[$pengguna2][$idproduk])){
				array_push($produkAda, $idproduk);
				
			}
		}			
		$jumlahItem1 = 0;
		$jumlahItem2 = 0;
		$nilai1 = 0;
		$nilai2 = 0;
		//looping penilaian dari pengguna 1
		foreach ($hasilOlahProduk[$pengguna1] as $idproduk => $value){
			$nilai1+=$hasilOlahProduk[$pengguna1][$idproduk];
			$jumlahItem1++;
		}	
		//looping penilaian dari pengguna 2	
		foreach ($hasilOlahProduk[$pengguna2] as $idproduk => $value) {
			$nilai2+=$hasilOlahProduk[$pengguna2][$idproduk];
			$jumlahItem2++;
		}		
		//cek jumlah produk milik masing-masing pengguna > 0
		if($jumlahItem1 > 0 && $jumlahItem2 > 0){
			$nilai1/=($jumlahItem1/1.0);
			$nilai2/=($jumlahItem2/1.0);
			foreach ($produkAda as $idp) {
				$hasilAtas+=($hasilOlahProduk[$pengguna1][$idp]-$nilai1) * ($hasilOlahProduk[$pengguna2][$idp]-$nilai2); 

				$perhitunganAtas .= '('.round($hasilOlahProduk[$pengguna1][$idp],2).'-'.round($nilai1,2).') * ('.round($hasilOlahProduk[$pengguna2][$idp],2).'-'.round($nilai2,2).')'." + ";

				$hasilPenyebut1+=pow($hasilOlahProduk[$pengguna1][$idp]-$nilai1, 2) ;
				$hasilPenyebut2+=pow($hasilOlahProduk[$pengguna2][$idp]-$nilai2, 2) ;

				$perhitunganBawah1 .= "(".number_format((float)$hasilOlahProduk[$pengguna1][$idp].'-'.$nilai1, 2, '.', '').")^2"." + ";
				$perhitunganBawah2 .= "(".number_format((float)$hasilOlahProduk[$pengguna2][$idp].'-'.$nilai2, 2, '.', '').")^2"." + ";

			}
			$perhitunganAtas = rtrim($perhitunganAtas," + ");
			$perhitunganBawah1 = rtrim($perhitunganBawah1," + ");
			$perhitunganBawah2 = rtrim($perhitunganBawah2," + ");
			if($hasilPenyebut1*$hasilPenyebut2!=0){	
				$hasil = $hasilAtas/(sqrt($hasilPenyebut1)*sqrt($hasilPenyebut2));

				$perhitunganMilik = "sim(".$pengguna1.",".$pengguna2.") = ".$perhitunganAtas." / √".$perhitunganBawah1." * √".$perhitunganBawah2." = ".number_format((float)$hasil, 2, '.', '');	

				$this->kumpulanHasil[$pengguna1][$pengguna2] = [
					"penggunaUtama"=>$pengguna1,
					"penggunaPembanding"=>$pengguna2,
					"hasil" => $perhitunganMilik
				];
				return $hasil;
			}
			else{
				$hasil = 0 ;
				$perhitunganMilik = "sim(".$pengguna1.",".$pengguna2.") = ".$hasil;	
				$this->kumpulanHasil[$pengguna1][$pengguna2] = [
					"penggunaUtama"=>$pengguna1,
					"penggunaPembanding"=>$pengguna2,
					"hasil" => $perhitunganMilik
				];
				return $hasil;
			}
		}
		else{			
			return $hasil;
		}		
	}
	//awal presentasi
	function HitungRekomendasi ($idpengguna){
		$start = microtime(true);
		$pgn = new ModelPengguna($this->db);
		$nli = new ModelPenilaian($this->db);
		//daftar penilaian pengguna
		$hasilSameProduct = $nli->getSame();
		//daftar seluruh pengguna
		$hasilPengguna = $nli->getPengguna();
		$hasilOlahPengguna = [];
		$hasilOlahProduk=[];
		$counterPengguna = 1;
		$hasilPearson = [];
		$KumpulanRekomendasi = [];
		//loop untuk membuat array dua dimensi yang menyimpan idpengguna dan nilai 
		foreach($hasilSameProduct as $rowPenggunaNilai){
		//cek apakah idpengguna sudah terdapat diarray atau belum
			if(!isset($hasilOlahProduk[$rowPenggunaNilai['idpengguna']])){
				$hasilOlahProduk[$rowPenggunaNilai['idpengguna']]=[];
			}
		//memasukan nilai dari idproduk yang sudah dinilai oleh idpengguna
			$totalScore = ($rowPenggunaNilai['nilaiMelihat']+abs($rowPenggunaNilai['nilaiPembelian'])+$rowPenggunaNilai['nilaiRating'])/3.0;
			$hasilOlahProduk[$rowPenggunaNilai['idpengguna']][$rowPenggunaNilai['idproduk']]=round($totalScore,2);
		}
		//loop untuk menginput seluruh pengguna yang ada di table nilai kedalam array
		foreach($hasilPengguna as $rowPengguna){
			array_push($hasilOlahPengguna, $rowPengguna['idpengguna']);
		}
		$jumlahPengguna = count($hasilOlahPengguna);

		for($i=0 ; $i<$jumlahPengguna;$i++){
			if($idpengguna !=  $hasilOlahPengguna[$i]){
				if(count($hasilOlahProduk[$hasilOlahPengguna[$i]])<1 || count($hasilOlahProduk[$idpengguna])<1){
					//skip perhitungan lannjutkan ke j++
					continue;
				}
				$nilaiPearson = $this->HitungPearson($idpengguna,$hasilOlahPengguna[$i],$hasilOlahProduk); 
				if($nilaiPearson!=0){
					$hasilPearson[$hasilOlahPengguna[$i]]=$nilaiPearson;
				}
			}
		}
		new Session();
		$this->f3->set('SESSION.hasilPearson',$this->kumpulanHasil);
		arsort($hasilPearson);

		$jumlahHasilPearson = count($hasilPearson);
		
		$limit = 2;
		$countLimit = 0;

		if($jumlahHasilPearson < $limit){

			$limit = $jumlahHasilPearson;
		}
		$kumpulanPerhitungan = [];
		foreach ($hasilPearson as $idPenggunaLain => $pearson){
			//ubah
			if($countLimit < $limit){
				$countLimit++;
				$produkBerbeda = $pgn->getDifferentProduct($idpengguna,$idPenggunaLain);
				$jumlahProdukBeda = count($produkBerbeda);
				if($jumlahProdukBeda>0){
					foreach ($produkBerbeda as $idProdukRekomendasi) {
						$idProdukLain=$idProdukRekomendasi['idproduk'];
						$rataRataPembanding = $nli->getMeanPengguna($idPenggunaLain)[0]['rata'];

						$cobain=$hasilOlahProduk[$idPenggunaLain][$idProdukLain];
						$hasilRekomendasiAtass = (($cobain-$rataRataPembanding)*$pearson);
						$hasilAtas .= '(('.round($cobain,2).'-'.round($rataRataPembanding,2).')*'.round($pearson,2).')'.' + ';
						$hasilRekomendasiBawah = $pearson;
						$hasilProduk[$idPenggunaLain].=$idProdukLain." ";

						if(!isset($KumpulanRekomendasi[$idpengguna][$idProdukLain])){

							$KumpulanRekomendasi[$idpengguna][$idProdukLain]=[
								"hasilRekomendasiAtass"=>$hasilRekomendasiAtass,
								"hasilRekomendasiBawah"=>$hasilRekomendasiBawah
							];				

						}
						else {
							$KumpulanRekomendasi[$idpengguna][$idProdukLain]["hasilRekomendasiAtass"] +=$hasilRekomendasiAtass;
							$KumpulanRekomendasi[$idpengguna][$idProdukLain]["hasilRekomendasiBawah"] +=$hasilRekomendasiBawah;

							
						}								
					}
					$hasilAtas = rtrim($hasilAtas,' + ');
				}
				if ($hasilProduk!=null){
					foreach ($hasilProduk as $key => $value) {
						$this->produkBerbeda[$key]=rtrim($value);
					}
				}
			}
		}
		$batasNilaiBawah = $nli->getNilaiTerkecilPengguna($idpengguna)[0]['minimum'];	
		//echo $batasNilaiBawah;
		$rataRataPengguna = $nli->getMeanPengguna($idpengguna)[0]['rata'];
		$finalRekomen=[];
		if(!is_null($KumpulanRekomendasi[$idpengguna])){
			foreach ($KumpulanRekomendasi[$idpengguna] as $idproduk => $value) {
				if($value['hasilRekomendasiBawah']!=0){
					if(($rataRataPengguna+($value['hasilRekomendasiAtass']/$value['hasilRekomendasiBawah']))>$batasNilaiBawah){
						$KumpulanRekomendasi[$idpengguna][$idproduk]["hasilRekomendasi"] = $rataRataPengguna + ($value["hasilRekomendasiAtass"]/$value["hasilRekomendasiBawah"]);

						$hasilKeseluruhan[$idpengguna][$idproduk] = 'Rekomendasi idproduk '.$idproduk.' untuk idpengguna '.$idpengguna.' -> '.round($rataRataPengguna,2).' + ('.$value['hasilRekomendasiAtass'].'/'.$value["hasilRekomendasiBawah"].") = ".$KumpulanRekomendasi[$idpengguna][$idproduk]["hasilRekomendasi"];
						
						$this->kumpulanPrediksi[$idproduk]= 'hasil perhitungan untuk id '.$idproduk.' dengan nilai rekomendasi lebih dari batas nilai yaitu '.round($KumpulanRekomendasi[$idpengguna][$idproduk]["hasilRekomendasi"],2);
					}
					else{
						//kalau hasil lebih kecil dari batas minimal
						$KumpulanRekomendasi[$idpengguna][$idproduk]["hasilRekomendasi"] = $rataRataPengguna + ($value["hasilRekomendasiAtass"]/$value["hasilRekomendasiBawah"]);
						$hasilKeseluruhan[$idpengguna][$idproduk] = 'Rekomendasi idproduk '.$idproduk.' untuk idpengguna '.$idpengguna.' -> '.round($rataRataPengguna,2).' + ('.$value['hasilRekomendasiAtass'].'/'.$value["hasilRekomendasiBawah"].") = ".$KumpulanRekomendasi[$idpengguna][$idproduk]["hasilRekomendasi"];
						$this->kumpulanPrediksi[null].= 'hasil perhitungan untuk id '.$idproduk.' dengan nilai rekomendasi kurang dari batas nilai yaitu '.round($KumpulanRekomendasi[$idpengguna][$idproduk]["hasilRekomendasi"],2);
					}				
				}
				else{
					$this->kumpulanPrediksi[null].= "hasil perhitungan untuk id ".$idproduk." dengan nilai rekomendasi kurang dari batas nilai yaitu 0 ";
				}

			}
			
			$this->f3->set('SESSION.PRODUKBERBEDA',$this->produkBerbeda);
			$this->f3->set('SESSION.KUMPULANPREDIKSI',$this->kumpulanPrediksi);
			$this->f3->set('SESSION.DETAILPREDIKSI',$hasilKeseluruhan);
			$time_elapsed_secs = microtime(true) - $start;
			// echo ' idpengguna: '.$idpengguna.' waktu : '. $time_elapsed_secs.'<br>';
			return $this->kumpulanPrediksi;
		}
		else{
			$this->f3->set('SESSION.PRODUKBERBEDA',$this->produkBerbeda);
			$this->f3->set('SESSION.KUMPULANPREDIKSI',$this->kumpulanPrediksi);
			$time_elapsed_secs = microtime(true) - $start;
			//echo ' idpengguna: '.$idpengguna.' waktu : '. $time_elapsed_secs.'<br>';
			return null;
		}
	}
	function hitungItemBased($idpengguna){
		$nli = new ModelPenilaian($this->db);
		$prd = new ModelProduk($this->db);
		$pgn = new ModelPengguna($this->db);
		//reset array untuk tampilan perhtiungan
		$this->kumpulanHasil=[];
		//before hasilsameproduct
		$hasilSamePengguna= $nli->getSame();
		//tadinya hasil pengguna
		$hasilProduk = $nli->getIdProdukPenilaian();
		//$hasilProduk = $prd->getAllProduk();
		//tukeran sama oleh produk
		$hasilOlahPengguna = [];
		//tukeran sama olah pengguna
		//$kumpulanPengguna = $nli->getUserInScore();
		$hasilOlahProduk=[];
		$counterProduk = 1;
		$hasilPearson = [];
		$KumpulanRekomendasi = [];

		//loop untuk membuat array dua dimensi yang menyimpan idproduk dan nilai 
		foreach($hasilSamePengguna as $rowProdukNilai){
		//cek apakah idproduk sudah terdaftar diarray atau belum

			if(!isset($hasilOlahPengguna[$rowProdukNilai['idproduk']])){
				$hasilOlahPengguna[$rowProdukNilai['idproduk']]=[];
			}
		//memasukan daftar pengguna dan nilainya sesuai idproduk
			$totalScore = ($rowProdukNilai['nilaiMelihat']+abs($rowProdukNilai['nilaiPembelian'])+$rowProdukNilai['nilaiRating'])/3.0;
			$hasilOlahPengguna[$rowProdukNilai['idproduk']][$rowProdukNilai['idpengguna']]=round($totalScore,2);
		}

		$jumlahPengguna = count($hasilOlahPengguna);
		//loop untuk menginput seluruh produk yang ada kedalam array
		foreach($hasilProduk as $rowProduk){
			array_push($hasilOlahProduk, $rowProduk['idproduk']);
		}

		$jumlahProduk = count($hasilOlahProduk);
		//echo ($jumlahProduk);
		for ($i=0; $i < $jumlahProduk; $i++) { 
			for ($j=$i+1; $j < $jumlahProduk ; $j++) {
				//cek apakah produk i atau prooduk j memiliki penilaian dari seorang pengguna
				if(count($hasilOlahPengguna[$hasilOlahProduk[$i]])<1 || count($hasilOlahPengguna[$hasilOlahProduk[$j]])<1){
					//skip perhitungan lannjutkan ke j++
					continue;
				} 

				$nilaiPearson =$this->HitungPearson($hasilOlahProduk[$i],$hasilOlahProduk[$j],$hasilOlahPengguna);
				//echo "nilai pearson: ".$nilaiPearson."<br>";

				//cek apakah sudah terdapat hasil pearson untuk produk i
				if(!isset($hasilPearson[$hasilOlahProduk[$i]])){
					$hasilPearson[$hasilOlahProduk[$i]]=[];
				}
				//cek apakah sudah terdapat hasil pearson untuk produk i
				if(!isset($hasilPearson[$hasilOlahProduk[$j]])){
					$hasilPearson[$hasilOlahProduk[$j]]=[];
				}
				if($nilaiPearson>0){
				//input ke array produk yang memiliki kesamaan serta nilai kesamaanya dengan produk i
					array_push($hasilPearson[$hasilOlahProduk[$i]], [
						"idproduk"=>$hasilOlahProduk[$j],
						"nilaiPearson"=>round($nilaiPearson,2)	
					]);
				//input ke array produk yang memiliki kesamaan serta nilai kesamaanya dengan produk j
					array_push($hasilPearson[$hasilOlahProduk[$j]], [
						"idproduk"=>$hasilOlahProduk[$i],
						"nilaiPearson"=>round($nilaiPearson,2)		
					]);
				}
				//echo json_encode($hasilPearson[$i]);
			}
		}
		new Session();
		$this->f3->set('SESSION.hasilPearsonItem',$this->kumpulanHasil);

		for ($k=0; $k <$jumlahProduk ; $k++) { 
			//cek apakah terdapat hasil hitung similaritas pearson dari pengguna k
			if(isset($hasilPearson[$hasilOlahProduk[$k]])){		
				usort($hasilPearson[$hasilOlahProduk[$k]], ['ControllerPenilaian','comparePearson']);

			}
		}	
		
		$hasilPenggunaBerbeda = [];
		for ($l=0; $l <$jumlahProduk ; $l++) { 

			//batasan untuk menentukan berapa top-n pengguna yang memiliki similaritas yang diambil
			$limit = 2;
			$countHasilPearson = count($hasilPearson[$hasilOlahProduk[$l]]);
			if($countHasilPearson<$limit){
				$limit=$countHasilPearson;
			}

			
			//mengambil idproduk dengan similaritas tinggi ke m
			for ($m=0; $m <$limit; $m++) { 

				$curr =  $hasilPearson[$hasilOlahProduk[$l]][$m];
				$penggunaBerbeda = $nli->getDifferentPengguna($hasilOlahProduk[$l],$curr['idproduk']);
				
				foreach ($penggunaBerbeda as $nilai) {

					$idPenggunaLain=$nilai['idpengguna'];
					$cobain=$nilai['score'];

					$hasilRekomendasiAtass = ($cobain*$curr['nilaiPearson']);
					$hasilRekomendasiBawah = $curr['nilaiPearson'];
					$hasilPenggunaBerbeda[$hasilOlahProduk[$l]][$curr['idproduk']] .= $idPenggunaLain." , "; 
					if(!isset($KumpulanRekomendasi[$idPenggunaLain][$hasilOlahProduk[$l]])){
						$KumpulanRekomendasi[$idPenggunaLain][$hasilOlahProduk[$l]]=[
							"hasilRekomendasiAtass"=>$hasilRekomendasiAtass,
							"hasilRekomendasiBawah"=>$hasilRekomendasiBawah,
							"detailAtas"=>'('.round($cobain,2).')('.round($curr['nilaiPearson'],2).')'.'+ ',
							"detailBawah"=>'('.round($curr['nilaiPearson'],2).')'.'+ '
						];
					}
					else {
						$KumpulanRekomendasi[$idPenggunaLain][$hasilOlahProduk[$l]]["hasilRekomendasiAtass"] +=$hasilRekomendasiAtass;
						$KumpulanRekomendasi[$idPenggunaLain][$hasilOlahProduk[$l]]["hasilRekomendasiBawah"] +=$hasilRekomendasiBawah;
						$KumpulanRekomendasi[$idPenggunaLain][$hasilOlahProduk[$l]]["detailAtas"].='('.round($cobain,2).')('.round($curr['nilaiPearson'],2).')'.'+ ';
						$KumpulanRekomendasi[$idPenggunaLain][$hasilOlahProduk[$l]]["detailBawah"].='('.round($curr['nilaiPearson'],2).')'.'+ ';
					}
				}	
				$hasilPenggunaBerbeda[$hasilOlahProduk[$l]][$curr['idproduk']]=rtrim($hasilPenggunaBerbeda[$hasilOlahProduk[$l]][$curr['idproduk']],", ");
				$this->f3->set('SESSION.penggunaBerbeda',$hasilPenggunaBerbeda);
			}	
		}
		$nilaiTerkecil = (float)$nli->getNilaiTerkecilPengguna($idpengguna)[0]['minimum'];
		if(!is_null($KumpulanRekomendasi[$idpengguna])){
			foreach ($KumpulanRekomendasi[$idpengguna] as $idproduk => $value) {

				if($value['hasilRekomendasiBawah']!=0){
					if(($value["hasilRekomendasiAtass"]/$value["hasilRekomendasiBawah"]) > $nilaiTerkecil){
						$KumpulanRekomendasi[$idpengguna][$idproduk]["hasilRekomendasi"] .= round(($value["hasilRekomendasiAtass"]/$value["hasilRekomendasiBawah"]),2);
						$this->kumpulanPrediksiItem[$idpengguna][$idproduk]=$KumpulanRekomendasi[$idpengguna][$idproduk]["hasilRekomendasi"];

						$detailAtas = rtrim($KumpulanRekomendasi[$idpengguna][$idproduk]["detailAtas"],'+ ');
						$detailBawah = rtrim($KumpulanRekomendasi[$idpengguna][$idproduk]["detailBawah"],'+ ');
						$this->detailRekomendasiItem[$idpengguna][$idproduk]=' ('.$detailAtas.'/'.$detailBawah.')';
					}
					else {

						$KumpulanRekomendasi[$idpengguna][$idproduk]["hasilRekomendasi"] .= round(($value["hasilRekomendasiAtass"]/$value["hasilRekomendasiBawah"]),2);

						$this->kumpulanPrediksiItem[$idpengguna][null]= ' id '.$idproduk.' memiliki perhitungan kurang dari rata-rata yaitu '.$KumpulanRekomendasi[$idpengguna][$idproduk]["hasilRekomendasi"];
						$detailAtas = rtrim($KumpulanRekomendasi[$idpengguna][$idproduk]["detailAtas"],'+ ');
						$detailBawah = rtrim($KumpulanRekomendasi[$idpengguna][$idproduk]["detailBawah"],'+ ');
						$this->detailRekomendasiItem[$idpengguna][$idproduk]=$detailAtas.'/'.$detailBawah;	
					}
				}
				else{
					$this->kumpulanPrediksiItem[$idpengguna][null]= ' id '.$idproduk.' memiliki perhitungan kurang dari rata-rata yaitu'. 0;
				}
			}
			$this->f3->set('SESSION.KUMPULANPREDIKSIITEM',$this->kumpulanPrediksiItem);
			$this->f3->set('SESSION.DETAILREKOMENDASIITEM',$this->detailRekomendasiItem);
			return $this->kumpulanPrediksiItem[$idpengguna];
			//return $finalRekomen[$idpengguna];
		}
		else{

			return null;
		}

	}
	function comparePearson($a, $b)
	{		
		if($a['nilaiPearson'] > $b['nilaiPearson']) return -1;
		else if( $a['nilaiPearson'] < $b['nilaiPearson']) return 1;
		else return 0;
	}

}