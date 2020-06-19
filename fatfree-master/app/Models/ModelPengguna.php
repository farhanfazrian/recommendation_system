 <?php

 class ModelPengguna extends DB\SQL\Mapper{
 	public function __construct(DB\SQL $db){
 		parent::__construct($db,'pengguna');
 	}
 	public function all(){
		//load semua record 
 		$this->load();
		//kembalikan yang sesuai query
 		return $this->query;
 	}

 	public function getByID($id){
 		$this->load(array('idpengguna=?',$id));
 		return $this->query;
 	}
 	public function getByName($emailPengguna){
 		$this->load(array('emailPengguna=?',$emailPengguna));
 	}
 	public function daftar($namaPengguna,$nomorTelepon,$alamat,$emailPengguna,$password){
 		$this->db->begin();
 		$this->db->exec("INSERT INTO pengguna (namaPengguna,nomorTelepon,alamat,emailPengguna,password,role) VALUES ('$namaPengguna',$nomorTelepon,'$alamat','$emailPengguna','$password',0)");	
 		$this->db->commit();
 	}
 	public function getAllPengguna(){
 		$this->db->begin();
 		$query_res = $this->db->exec("Select idpengguna from pengguna");	
 		$this->db->commit();
 		return $query_res;

 	}

 	public function getDifferentProduct($idpenggunaU,$idpenggunaP){
 		$this->db->begin();
 		$query_res=$this->db->exec("select id6.idproduk,id6.score
 			from
 			(select
 				idproduk,((nilaiMelihat+abs(nilaiPembelian)+nilaiRating)/3) as score
 				from 
 				nilai
 				where 
 				idpengguna = '$idpenggunaP'
 			) as id6
 			left join 
 			(select
 				idproduk
 				from 
 				nilai
 				where
 				idpengguna = '$idpenggunaU') as id1
 				on id6.idproduk=id1.idproduk
 				where id1.idproduk is null ");
 		$this->db->commit();
 		return $query_res;
 	}
 	public function getOtherReview ($idproduk,$idpengguna){
 		$this->db->begin();
 		$query_res=$this->db->exec("select score from nilai where idproduk='$idproduk' AND idpengguna='$idpengguna' ");
 		$this->db->commit();
 		return $query_res;
 	}
 	public function getRole($emailPengguna){
 		$this->db->begin();
 		$query_res = $this->db->exec("Select role from pengguna where emailPengguna= '$emailPengguna'");	
 		$this->db->commit();
 		return $query_res;
 	}

 }