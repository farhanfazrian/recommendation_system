<?php
class ModelPenilaian extends DB\SQL\Mapper{
	public function __construct(DB\SQL $db){
		parent::__construct($db,'nilai');
	}
	public function all(){
		//load semua record 
		$this->load();
		//kembalikan yang sesuai query
		return $this->query;
	}
	public function getByID($id){
		$this->load(array('id=?',$id));
		return $this->query;
	}	
	public function addRating($nilaiPembelian,$nilaiMelihat,$nilaiRating,$idproduk,$idpengguna,$review){
		$this->db->begin();
		$this->db->exec("INSERT INTO nilai (nilaiPembelian,nilaiMelihat,nilaiRating,idproduk,idpengguna,review) VALUES ($nilaiPembelian,$nilaiMelihat,$nilaiRating,$idproduk,$idpengguna,'$review')");	
		$this->db->commit();
	}
	public function updateKlik($nilaiMelihat,$idpengguna,$idproduk){
		$this->db->begin();
		$this->db->exec("Update nilai SET nilaiMelihat=$nilaiMelihat where idpengguna='$idpengguna' AND idproduk='$idproduk'");	
		$this->db->commit();
	}
	public function updateRating($idpengguna,$idproduk,$review,$nilaiRating){
		$this->db->begin();
		$this->db->exec("Update nilai SET review='$review' where idpengguna='$idpengguna' AND idproduk='$idproduk'");	
		$this->db->exec("Update nilai SET nilaiRating='$nilaiRating', review='$review' where idpengguna='$idpengguna' AND idproduk='$idproduk'");	
		$this->db->commit();
	}
	

	public function hitungRata($idpengguna){
		$this->db->begin();
		$query_res = $this->db->exec("Select nilaiPembelian,nilaiMelihat,nilaiRating from nilai where idpengguna=$idpengguna");	
		return $query_res;
	}
	public function getSame(){
		$this->db->begin();
		$query_res=$this->db->exec("select * from nilai ");
		$this->db->commit();
		return $query_res;
	}
	public function getDifferentPengguna($idprodukU,$idprodukP){
		$this->db->begin();
		$query_res=$this->db->exec("select id6.idpengguna,id6.score
			from
			(select
			idpengguna,((nilaiMelihat+abs(nilaiPembelian)+nilaiRating)/3) as score
			from 
			nilai
			where 
			idproduk = $idprodukP
			) as id6
			left join 
			(select
			idpengguna
			from 
			nilai
			where
			idproduk = $idprodukU) as id1
			on id6.idpengguna=id1.idpengguna
			where id1.idpengguna is null");
		$this->db->commit();
		return $query_res;
	}
	/**public function getUserInScore(){
		$this->db->begin();
		$query_res=$this->db->exec("select distinct idpengguna from nilai ");
		$this->db->commit();
		return $query_res;
	}**/
	function updateStatusPembelian($status,$idpengguna,$idproduk){
		//var_dump("masuk");
		$this->db->begin();
		$this->db->exec("Update nilai SET nilaiPembelian = '$status' where idpengguna='$idpengguna' AND idproduk='$idproduk'");	
		$this->db->commit();
	}
	function getStatusPembelian($idpengguna,$idproduk){
		$this->db->begin();
		$query_res = $this->db->exec("select nilaiPembelian from nilai where idpengguna = $idpengguna AND idproduk = $idproduk");
		$this->db->commit();
		return $query_res;
	}
	function getPengguna(){
		$this->db->begin();
		$query_res = $this->db->exec("select distinct idpengguna from nilai");
		$this->db->commit();
		return $query_res;
	}
	function getMeanPengguna($idpengguna){
		$this->db->begin();
		$query_res = $this->db->exec("select avg((nilaiMelihat+abs(nilaiPembelian)+nilaiRating)/3) as rata from nilai where idpengguna = $idpengguna");
		$this->db->commit();
		return $query_res;
	}
	function getMeanProduk($idproduk){
		$this->db->begin();
		$query_res = $this->db->exec("select avg((nilaiMelihat+abs(nilaiPembelian)+nilaiRating)/3) as rata from nilai where idproduk = $idproduk ");
		$this->db->commit();
		return $query_res;
	}
	function getNilaiTerkecilPengguna($idpengguna){
		$this->db->begin();
		$query_res = $this->db->exec("select min((nilaiMelihat+abs(nilaiPembelian)+nilaiRating)/3) as minimum from nilai where idpengguna = $idpengguna ");
		$this->db->commit();
		return $query_res;
	}

	function getPenilaianSpesifik($idpengguna,$idproduk){
		$this->db->begin();
		$query_res = $this->db->exec("select * from nilai where idpengguna = $idpengguna AND idproduk = $idproduk ");
		$this->db->commit();
		return $query_res;
	}
	function getIdProdukPenilaian(){
		$this->db->begin();
 		$query_res = $this->db->exec("Select distinct idproduk from nilai");	
 		$this->db->commit();
 		return $query_res;
	}
	function getProdukFavorit($idpengguna){
		$this->db->begin();
 		$query_res = $this->db->exec("Select prd2.idproduk,count(prd2.idproduk) as jumlah from ((select idproduk from nilai where idpengguna = $idpengguna) as prd1 right join (select idproduk from nilai where idpengguna != $idpengguna ) as prd2 on prd1.idproduk = prd2.idproduk) where prd1.idproduk is null group by prd2.idproduk order by jumlah desc limit 3");	
 		$this->db->commit();
 		return $query_res;
	}
	function getProdukFavorit2($limit){
		$this->db->begin();
 		$query_res = $this->db->exec("Select idproduk,count(idproduk) as jumlah from nilai group by idproduk order by jumlah desc limit $limit");	
 		$this->db->commit();
 		return $query_res;
	}
}

