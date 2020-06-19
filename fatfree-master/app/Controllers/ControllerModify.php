<?php
class ControllerModify extends Controller{
// contoh fungsi yang mengadopsi class AppController

	function renderInsert(){
		$new =[];
		$pengguna = new ModelPengguna($this->db);
		$produk = new ModelProduk($this->db);

		$allProduk = $produk->all();
		$newId = $produk->getMaxIdProduk()[0]['maximum']+1;
		array_push($new,$newId);
		$this->f3->set('sp',$allProduk);	
		$ID= $this->f3->get('SESSION.user');	
		$pgn = $pengguna->getByID($ID);
		$role = $this->f3->get('SESSION.role');

		$this->f3->set('pgn',$pengguna);
		$this->f3->set('newId',$new);
		if($role==1){
			$template = new Template;
			echo $template->render('InsertPage.htm');
		}
		else{
			$this->f3->reroute('/pengguna');
		}
	}
	function insertProduk(){
		$produk = new ModelProduk($this->db);
		$idproduk = $this->f3->get('POST.idproduk');
		$deskripsi = $this->f3->get('POST.deskripsi');
		$harga = $this->f3->get('POST.harga');
		$urlGambar = $this->f3->get('POST.urlGambar');
		$nama = $this->f3->get('POST.nama');
		$kategori = $this->f3->get('POST.kategori');
		$produk->tambahProduk($idproduk,$deskripsi,$harga,$urlGambar,$nama,$kategori);
		$this->f3->reroute('/insert');
	}
	function updateProduk(){
		$produk = new ModelProduk($this->db);
		$idproduk = $this->f3->get('POST.idproduk');
		$deskripsi = $this->f3->get('POST.deskripsi');
		$harga = $this->f3->get('POST.harga');
		$urlGambar = $this->f3->get('POST.urlGambar');
		$nama = $this->f3->get('POST.nama');
		$kategori = $this->f3->get('POST.kategori');
		$produk->updateProduk($idproduk,$deskripsi,$harga,$urlGambar,$nama,$kategori);
		$this->f3->reroute('/update');
	}
	function deleteProduk(){
		$produk = new ModelProduk($this->db);
		$idproduk = $this->f3->get('POST.idproduk');
		$produk->deleteProduk($idproduk);
		$this->f3->reroute('/delete');
	}
	function renderUpdate(){
		$pengguna = new ModelPengguna($this->db);
		$produk = new ModelProduk($this->db);
		$allProduk = $produk->all();

		$this->f3->set('sp',$allProduk);	
		$ID= $this->f3->get('SESSION.user');	
		$pgn = $pengguna->getByID($ID);
		$role = $this->f3->get('SESSION.role');
		$idpUpdate = (int)$this->f3->get('PARAMS.idproduk');
		$gambarUpdate = $produk->getSpesifikProduk($idpUpdate);
		$this->f3->set('prdUpdate',$gambarUpdate);	
		$this->f3->set('idProdukUpdate',$idpUpdate);	
		$this->f3->set('pgn',$pengguna);
		if($role==1){
			$template = new Template;
			echo $template->render('UpdatePage.htm');
		}
		else{
			$this->f3->reroute('/pengguna');
		}
	}
	function renderDelete(){
		
		$pengguna = new ModelPengguna($this->db);
		$produk = new ModelProduk($this->db);
		$allProduk = $produk->all();

		$this->f3->set('sp',$allProduk);	
		$ID= $this->f3->get('SESSION.user');	
		$pgn = $pengguna->getByID($ID);
		$role = $this->f3->get('SESSION.role');

		$idpUpdate = (int)$this->f3->get('PARAMS.id');
		$gambarUpdate = $produk->getSpesifikProduk($idpUpdate);
		$this->f3->set('prdUpdate',$gambarUpdate);	
		$this->f3->set('idProdukUpdate',$idpUpdate);	
		$this->f3->set('pgn',$pengguna);
		if($role==1){
			$template = new Template;
			echo $template->render('DeletePage.htm');
		}
		else{
			$this->f3->reroute('/pengguna');
		}
	}

	function about(){
		$pengguna = new ModelPengguna($this->db);	
		$ID= $this->f3->get('SESSION.user');	
		$pgn = $pengguna->getByID($ID);

		$this->f3->set('pgn',$pengguna);
		$template = new Template;
		echo $template->render('about.htm');
	}
}
