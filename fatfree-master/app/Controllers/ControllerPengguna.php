<?php
class ControllerPengguna extends Controller{
// contoh fungsi yang mengadopsi class AppController

	function render(){
		$pengguna = new ModelPengguna($this->db);			
		$ID= $this->f3->get('SESSION.user');	
		$pgn = $pengguna->getByID($ID);
		$role = $this->f3->get('SESSION.role');
		$this->f3->set('pgn',$pengguna);
		if($role==0){
			$template = new Template;
			echo $template->render('ViewPengguna.htm');
		}
		else{
			$this->f3->reroute('/admin');
		}
	}
	function renderAdmin(){
		$pengguna = new ModelPengguna($this->db);			
		$ID= $this->f3->get('SESSION.user');	
		$pgn = $pengguna->getByID($ID);
		$role = $this->f3->get('SESSION.role');
		$this->f3->set('pgn',$pengguna);
		if($role==1){
			$template = new Template;
			echo $template->render('ViewAdmin.htm');
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
