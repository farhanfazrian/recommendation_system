<?php

class ModelProduk extends DB\SQL\Mapper{
	public function __construct(DB\SQL $db){
		parent::__construct($db,'produk');
	}
	public function all(){
		$this->db->begin();
		$query_res = $this->db->exec("Select * from produk where status > 0  " );	
		$this->db->commit();
		return $query_res;
	}
	public function getByName($nama){
		$this->load(array('nama=?',$nama));
		return $this->query;
	}
	public function getAllProduk(){
		$this->db->begin();
		$query_res = $this->db->exec("Select idproduk from produk where status > 0 ");	
		$this->db->commit();
		return $query_res;

	}
	public function getMaxIdProduk(){
		$this->db->begin();
		$query_res = $this->db->exec("Select Max(idproduk) as maximum from produk where status > 0 ");	
		$this->db->commit();
		return $query_res;
	}
	public function getSpesifikProduk($idproduk){
		$this->db->begin();
		$query_res = $this->db->exec("Select * from produk where idproduk = $idproduk AND status > 0  " );	
		$this->db->commit();
		return $query_res;

	}
	public function countCategory($category,$batasMin,$batasMax,$search){
		$this->db->begin();

		$pencarian = "Select count(idproduk) as cnt from produk where category = $category AND status > 0  ";
		if($batasMin && $batasMax && !$search){
			$pencarian = "Select count(idproduk) as cnt from produk where category = $category AND harga >= $batasMin AND harga <=$batasMax AND status > 0 ";
		}
		else if(!$batasMin && !$batasMax && $search){
			$pencarian = "Select count(idproduk) as cnt from produk where category = $category AND nama like '%$search%' AND status > 0 ";
		}
		else if($batasMin && $batasMax && $search){
			$pencarian = "Select count(idproduk) as cnt from produk where category = $category AND nama like '%$search%' AND harga >= $batasMin AND harga <=$batasMax AND status > 0  ";
		}
		$query_res = $this->db->exec($pencarian);
		$this->db->commit();
		return $query_res;
	}
	public function getByCategory($category,$page,$batasMin,$batasMax,$search){
		$page = ($page-1) * 10;
		if($page<1){
			$page=0;
		}
		$this->db->begin();

		$pencarian = "Select * from produk where category = $category AND status > 0  limit $page,10 ";
		if(!$search && $batasMin && $batasMax){
			$pencarian = "Select * from produk where category = $category AND harga >= $batasMin AND harga <=$batasMax AND status > 0 limit $page,10 ";
		}
		else if($search && !$batasMin && !$batasMax){
			$pencarian = "Select * from produk where category = $category AND nama like '%$search%' AND status > 0  limit $page,10 ";
		}
		else if($search && $batasMin && $batasMax){
			$pencarian = "Select * from produk where category = $category AND nama like '%$search%' AND harga >= $batasMin AND harga <=$batasMax AND status > 0  limit $page,10 ";
		}
		$query_res = $this->db->exec($pencarian);

		$this->db->commit();
		return $query_res;
	}
	public function tambahProduk($idproduk,$deskripsi,$harga,$gambar,$nama,$category){
		$this->db->begin();
		$this->db->exec("INSERT INTO produk (idproduk,deskripsi,harga,gambar,nama,category,status) VALUES ($idproduk,'$deskripsi',$harga,'$gambar','$nama',$category,'1')");	
		$this->db->commit();
	}
	public function updateProduk($idproduk,$deskripsi,$harga,$gambar,$nama,$category){
		$this->db->begin();
		$this->db->exec("update produk set deskripsi='$deskripsi',harga= $harga,gambar='$gambar',nama='$nama',category= $category where idproduk= $idproduk ");	
		$this->db->commit();
	}
	public function deleteProduk($idproduk){
		$this->db->begin();
		$this->db->exec("update produk set status = 0 where idproduk = $idproduk");	
		$this->db->commit();
	}
}