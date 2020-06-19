<?php
class ControllerHome extends Controller{
// contoh fungsi yang mengadopsi class AppController
	function render(){
		$template = new Template;
		echo $template->render('home.htm');
	}
	function beforeroute(){		
	}
	function authenticate(){
		$emailInput= $this->f3->get('POST.emailPengguna');
		$password = $this->f3->get('POST.password');
		$error = 0;
		$user = new ModelPengguna($this->db);
		$user->getByName($emailInput);
		$role = $user->getRole($emailInput)[0]['role'];
		if(password_verify($password, $user->password) && $role==0){
			$this->f3->set('SESSION.user', $user->idpengguna);
			$this->f3->set('SESSION.role', $user->role);
			$this->f3->reroute('/pengguna');
		}
		else if(password_verify($password, $user->password) && $role==1){
			$this->f3->set('SESSION.user', $user->idpengguna);
			$this->f3->set('SESSION.role', $user->role);
			$this->f3->reroute('/Admin');
		}
		else{
		$this->f3->set('SESSION.message', 'Email Atau Password Salah !!');
		$this->f3->reroute('/home');
		}
	}
	function about(){
		$template = new Template;
		echo $template->render('aboutGuest.htm');
	}
	function keluar($f3){
		$f3->clear('SESSION');
		$this->f3->reroute('/home');
	}

}
