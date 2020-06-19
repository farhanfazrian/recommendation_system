<?php
class ControllerProduk extends Controller{
	

	function getProduk(){
		$role = $this->f3->get('SESSION.role');

		$this->getPengguna();
		if($role===0){
			$prdRekomendasi= [];
			$prdRekomendasiItemBased= [];
			$ModelProduk = new ModelProduk($this->db);
			$batasMax = (int)$this->f3->get('GET.batasMax');
			$batasMin = (int)$this->f3->get('GET.batasMin');
			$query = $this->f3->get('GET.pencarian');

			$semuaProduk = $ModelProduk->getByCategory($this->f3->get('PARAMS.category'),$this->f3->get('PARAMS.page'),$batasMin,$batasMax,$query);

			$countProduk = (int)$ModelProduk->countCategory($this->f3->get('PARAMS.category'),$batasMin,$batasMax,$query)[0]['cnt'];
			$arrPage = [];
			if($countProduk %2 == 1){
				$jumlahHalaman=($countProduk/10)+1;
			}
			else{
				$jumlahHalaman=ceil(($countProduk/10));
			}
			for($i = 1 ; $i <= $jumlahHalaman ; $i++){
				array_push($arrPage,$i);

			}

			$ModelPenilaian = new ModelPenilaian($this->db);
			$tableNilaiKeseluruhan =  $this->db->exec("Select idpengguna,idproduk,((nilaiMelihat+abs(nilaiPembelian)+nilaiRating)/3) as score from nilai order by idpengguna");


			$this->f3->set('idcategory',$this->f3->get('PARAMS.category'));
			$this->f3->set('sp',$semuaProduk);
			$this->f3->set('countProduk',$arrPage);
			$conRekom = new ControllerPenilaian();

			$ID= $this->f3->get('SESSION.user');

		//Melakukan proses hitung rekomendasi
			
			$idp=$conRekom->HitungRekomendasi((int)$ID);
			
			if($idp!=null){
				arsort($idp);
				$jumlahPrediksi = count($idp);
				if($jumlahPrediksi>=3){
					$jumlahPrediksi = 3;
				}
				$counter = 0;
				if(!is_null($idp)){
					foreach ($idp as $hasil => $value) {
						if($counter<3){
							$getPrdRekom = $ModelProduk->getSpesifikProduk((int)$hasil);

							foreach ($getPrdRekom as $gambar) {
								array_push($prdRekomendasi, $gambar);
							}
							$counter++;
						}
					}	
				}
			}
			if($prdRekomendasi==null){
				$idF = $ModelPenilaian->getProdukFavorit($ID);				
				if($idF!=null){
					foreach ($idF as $value){			
						$getPrdRekom = $ModelProduk->getSpesifikProduk((int)$value['idproduk']);
						foreach ($getPrdRekom as $gambar) {
							array_push($prdRekomendasi, $gambar);
						}
					}
				}
			}
			if($prdRekomendasi==null){
				$idF = $ModelPenilaian->getProdukFavorit2(3);				
				if($idF!=null){
					foreach ($idF as $value){			
						$getPrdRekom = $ModelProduk->getSpesifikProduk((int)$value['idproduk']);
						foreach ($getPrdRekom as $gambar) {
							array_push($prdRekomendasi, $gambar);
						}
					}
				}
			}

					
			$this->f3->set('kumpulanPrdRekom',$prdRekomendasi);
			
		//bagian tampilan User based
			$hasilPearson= $this->f3->get('SESSION.hasilPearson');
			$produkBerbeda=$this->f3->get('SESSION.PRODUKBERBEDA');
			$produkRekomendasi = $this->f3->get('SESSION.KUMPULANPREDIKSI');
			$detailRekomendasi = $this->f3->get('SESSION.DETAILPREDIKSI');

			// echo json_encode($detailRekomendasi);
		//untuk daftar produk beda kandidat rekomendasi
			$produkBeda = [];
			if(!is_null($produkBerbeda)){
				foreach ($produkBerbeda as $key => $value) {
					array_push($produkBeda, "Perbedaan antara pengguna ".$ID." dan ".$key." yang belum dinilai oleh  ".$ID." adalah ".$value);
				}
			}
			
		//untuk rumus perhitungan
			$penggunaUtama = [];
			$penggunaPembanding = [];
			$nilai = [];
			$keys = array_keys($hasilPearson);

			for ($i=0; $i <count($hasilPearson) ; $i++) { 
				foreach ($hasilPearson[$keys[$i]] as $key => $value) {
					if($value['penggunaUtama']==$ID || $value['penggunaPembanding']==$ID ){
						array_push($nilai, $value["hasil"]);
					}
				}
			}
			$rincianRekomendasi = [];
			if(!is_null($detailRekomendasi)){
				$kunci = array_keys($detailRekomendasi);

				for ($i=0; $i <count($detailRekomendasi) ; $i++) { 
					foreach ($detailRekomendasi[$kunci[$i]] as $key => $value) {
						array_push($rincianRekomendasi, $value);
					}
				}
			}

		//untuk nilai barang yang direkomendasikan	
			$barangRekomendasi=[];
			if(!is_null($produkRekomendasi)){
				foreach ($produkRekomendasi as $key => $value) {
					if($key!=null){
						array_push($barangRekomendasi," Hasil perhitungan rekomendasi untuk pengguna ".$ID." dengan id produk ".$key." memiliki nilai ". $value);
					}
					else{
						array_push($barangRekomendasi," Hasil perhitungan rekomendasi untuk pengguna ".$ID.' : <br> '.$value);
					}
				}
			}
		//<=========bagian tampilan item based============>

			$idItemBased =$conRekom->hitungItemBased((int)$ID);

			$jumlahPrediksiItem = count($idItemBased);
			if($jumlahPrediksiItem>=3){
				$jumlahPrediksiItem = 3;
			}
		//echo json_encode($idItemBased);
			$counter = 0;
			if(!is_null($idItemBased)){
				foreach ($idItemBased as $idproduk => $score) {


					$getPrdRekomItem = $ModelProduk->getSpesifikProduk((int)$idproduk);

					if($counter < $jumlahPrediksiItem){
						foreach ($getPrdRekomItem as $peroduk ) {

							array_push($prdRekomendasiItemBased, $peroduk);
						}
						$counter++;
					}

				}
			}
			
			$this->f3->set('kumpulanPrdRekomItemBased',$prdRekomendasiItemBased);


			$hasilPearsonItem= $this->f3->get('SESSION.hasilPearsonItem');
			$detailRekomendasiItem = $this->f3->get('SESSION.DETAILREKOMENDASIITEM');
			$penggunaBerbedaItem=$this->f3->get('SESSION.penggunaBerbeda');
			$produkRekomendasiItem = $this->f3->get('SESSION.KUMPULANPREDIKSIITEM');

			//untuk rumus perhitungan
			$produkUtama = [];
			$produkPembanding = [];
			$nilaiProduk = [];
			$keysProduk = array_keys($hasilPearsonItem);

			for ($i=0; $i < count($hasilPearsonItem) ; $i++) { 
				foreach ($hasilPearsonItem[$keysProduk[$i]] as $key => $value) {

					array_push($nilaiProduk, $value["hasil"] );

				}
				array_push($nilaiProduk,"<========================>" );

			}
			if(!is_null($detailRekomendasiItem)){
				$rincianRekomendasiItem = [];
				$kunci = array_keys($detailRekomendasiItem);
				for ($i=0; $i <count($detailRekomendasiItem) ; $i++) { 
					foreach ($detailRekomendasiItem[$kunci[$i]] as $key => $value) {
						array_push($rincianRekomendasiItem, $value);
					}
				}
			}
			//untuk daftar produk beda kandidat rekomendasi
			$penggunaBeda = [];

			if(!is_null($penggunaBerbedaItem)){
				$keysPenggunaBerbeda = array_keys($penggunaBerbedaItem);
				$jumlahPenggunaBerbeda = count($penggunaBerbedaItem);
				for ($i=0; $i < $jumlahPenggunaBerbeda; $i++) { 

					foreach ($penggunaBerbedaItem[$keysPenggunaBerbeda[$i]] as $key => $value) {
						if($ID==$value){					
							array_push($penggunaBeda, "Perbedaan daftar pengguna yang belum menilai antara produk ".$keysPenggunaBerbeda[$i]." dan ".$key." untuk produk ".$keysPenggunaBerbeda[$i]." adalah ".$value);
						}
					}
				}
			}
			//untuk nilai barang yang direkomendasikan
			$barangRekomendasiItem=[];
			if(!is_null($produkRekomendasiItem)){
				$keysBarangRekomendasiItem=array_keys($produkRekomendasiItem);
				$jumlahProdukRekomendasiItem = count($produkRekomendasiItem);

				for ($i=0; $i <$jumlahProdukRekomendasiItem ; $i++) { 

					foreach ($produkRekomendasiItem[$keysBarangRekomendasiItem[$i]] as $key => $value) {

						if($ID==$keysBarangRekomendasiItem[$i]){
							if($key!=null){
								array_push($barangRekomendasiItem," Hasil Perhitungan pengguna ".$keysBarangRekomendasiItem[$i]." dengan id produk ".$key." memiliki nilai ". $value);
							}
							else{
								array_push($barangRekomendasiItem," Hasil perhitungan rekomendasi untuk pengguna ".$keysBarangRekomendasiItem[$i]." dengan idproduk ". $value);
							}
						}
					}
				}
			}
			
		//tampilan user based
			$this->f3->set('penggunaUtama',$penggunaUtama);
			$this->f3->set('penggunaPembanding',$penggunaPembanding);
			$this->f3->set('nilai',$nilai);
			$this->f3->set('produkBerbeda',$produkBeda);
			$this->f3->set('tampilanRekomendasi',$barangRekomendasi);
			$this->f3->set('rincianRekomendasi',$rincianRekomendasi);
		//tampilan item based
			$this->f3->set('produkUtama',$produkUtama);
			$this->f3->set('produkPembanding',$produkPembanding);
			$this->f3->set('nilaiProduk',$nilaiProduk);
			$this->f3->set('penggunaBerbeda',$penggunaBeda);
			$this->f3->set('tampilanRekomendasiItem',$barangRekomendasiItem);
			$this->f3->set('rincianRekomendasiItem',$rincianRekomendasiItem);
			$this->f3->set('tableNilaiKeseluruhan',$tableNilaiKeseluruhan);

			$template = new Template;
			echo $template->render('View_Produk_Kategori.htm');
		}
		else{
			$this->f3->reroute('/admin');
		}
	}
	function detailProduk(){
		$role = $this->f3->get('SESSION.role');
		if($role==0){
			$this->getPengguna();
			$conproduk = new ControllerPenilaian();
			$modelPenilaian = new ModelPenilaian($this->db);
			$idU= $this->f3->get('SESSION.user');	
			$nama= $this->f3->get('PARAMS.idproduk');
			$Id = (int) $nama;
			$produk= new ModelProduk($this->db);

			$conproduk->inputKlik($this->f3->get('SESSION.user'),$Id);
			$prd=$produk->getSpesifikProduk($Id);
			$this->f3->set('produk',$prd);
			$statusPembelian=$modelPenilaian->getStatusPembelian($idU,$Id)[0];

			$this->f3->set('nilaiPembelian',$statusPembelian['nilaiPembelian']);

			$template = new Template;
			echo $template->render('elektrikGitar/detail_produk.htm');
		}
		else{
			$this->f3->reroute('/admin');
		}
	}
	function detailProdukAdmin(){
		$this->getPengguna();
		$conproduk = new ControllerPenilaian();
		$modelPenilaian = new ModelPenilaian($this->db);
		$idU= $this->f3->get('SESSION.user');	
		$nama= $this->f3->get('PARAMS.idproduk');
		$Id = (int) $nama;
		$produk= new ModelProduk($this->db);
		
		$prd=$produk->getSpesifikProduk($Id);
		$this->f3->set('produk',$prd);
		$role = $this->f3->get('SESSION.role');
		if($role==1){
			$template = new Template;
			echo $template->render('elektrikGitar/detail_produk_admin.htm');
		}
		else{
			$this->f3->reroute('/pengguna');
		}
	}

	function detailProdukNonUser(){
		$this->getPengguna();
		$conproduk = new ControllerPenilaian();
		$modelPenilaian = new ModelPenilaian($this->db);		
		$nama= $this->f3->get('PARAMS.idproduk');		
		$Id = (int) $nama;	

		$produk= new ModelProduk($this->db);	
		$prd=$produk->getSpesifikProduk($Id);
		
		$this->f3->set('prd',$prd);		
		$template = new Template;
		echo $template->render('elektrikGitar/detail_produk_guest.htm');
	}
	function getProdukAdmin(){	
		$this->getPengguna();
		$prdRekomendasi= [];
		$prdRekomendasiItemBased= [];
		$ModelProduk = new ModelProduk($this->db);
		$batasMax = (int)$this->f3->get('GET.batasMax');
		$batasMin = (int)$this->f3->get('GET.batasMin');
		$query = $this->f3->get('GET.pencarian');
		
		$semuaProduk = $ModelProduk->getByCategory($this->f3->get('PARAMS.category'),$this->f3->get('PARAMS.page'),$batasMin,$batasMax,$query);
		
		$countProduk = (int)$ModelProduk->countCategory($this->f3->get('PARAMS.category'),$batasMin,$batasMax,$query)[0]['cnt'];
		$arrPage = [];
		if($countProduk %2 == 1){
			$jumlahHalaman=($countProduk/10)+1;
		}
		else{
			$jumlahHalaman=ceil(($countProduk/10));
		}
		for($i = 1 ; $i <= $jumlahHalaman ; $i++){
			array_push($arrPage,$i);

		}

		$this->f3->set('idcategory',$this->f3->get('PARAMS.category'));
		$this->f3->set('sp',$semuaProduk);
		$this->f3->set('countProduk',$arrPage);
		$ID= $this->f3->get('SESSION.user');
		
		
		//echo json_encode($penggunaUtama);
		$role = $this->f3->get('SESSION.role');
		if($role==1){
			$template = new Template;
			echo $template->render('View_Produk_Kategori_Admin.htm');
		}
		else{
			$this->f3->reroute('/pengguna');
		}
	}
	
}



