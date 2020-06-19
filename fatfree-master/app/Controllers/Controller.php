<?php
class Controller {
	//devinis variabel
	protected $f3;
	protected $db;
		
	//fungsi yang dieksekusi sebelum semua route
	function beforeroute(){
		$aa =(int)$this->f3->get('PARAMS.idproduk');	

		if($this->f3->get('SESSION.user')===null && $aa===0){
				$this->f3->reroute('/home');
				exit;
		}
		else if($aa!=null){
		}
		
	}
	function afterroute(){
		$this->f3->clear('SESSION.message');
		//echo ' after route -';
	}
	function getPengguna(){
		//dapetin nama diheader
		$pengguna = new ModelPengguna($this->db);	
		$ID= $this->f3->get('SESSION.user');	
		$pgn = $pengguna->getByID($ID);
		$this->f3->set('pgn',$pengguna);	
	}
	function __construct(){
	$f3=Base::instance();
	$this->f3=$f3;
	//membuat koneksi
	$db = new DB\SQL(
		$f3->get('devdb'),
		$f3->get('devdbusername'),
		$f3->get('devdbpassword'),
		array( \PDO::ATTR_ERRMODE => \PDO::ERRMODE_EXCEPTION)
	);
	//set variabel db dengan hasil dari membuat koneksi
	$this->db=$db;
	}
}
