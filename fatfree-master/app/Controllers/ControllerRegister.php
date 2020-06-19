<?php
class ControllerRegister extends Controller{
	function beforeroute(){
		
	}
	function register(){
		$dataLogin = new ControllerHome();
		$penilaian = new ControllerPenilaian();
		$namaPengguna=  $this->f3->get('POST.namaBaru');
		$nomorTelepon = $this->f3->get('POST.teleponBaru');
		$alamat = $this->f3->get('POST.alamatBaru');
		$emailPengguna = $this->f3->get('POST.emailBaru');
		$password = $this->f3->get('POST.passwordBaru');
		$passHash = password_hash($password,PASSWORD_DEFAULT);
		$user = new ModelPengguna($this->db);
		$query_res = $this->db->exec("Select emailPengguna from pengguna where emailPengguna='$emailPengguna'");
		$err = "email ga ada";
		if(count($query_res) < 1){
			$user->daftar($namaPengguna,$nomorTelepon,$alamat,$emailPengguna,$passHash,0);
			$user->getByName($emailPengguna);
			$role = $user->getRole($emailPengguna)[0]['role'];
			//login
			if($user->dry()){
				$error = 1; 
				$this->f3->set('errorStatus',$error);
				$template = new Template;
				echo $template->render('home.htm');

			}	
			if(password_verify($password, $user->password)){
				
				$this->f3->set('SESSION.user', $user->idpengguna);
				$this->f3->set('SESSION.role', $user->role);
				
				//mendapatkan penilaian awal
				$idpengguna = (int)$this->f3->get('SESSION.user');
				$prd1 = $this->f3->get('POST.satu');
				$prd2 = $this->f3->get('POST.dua');
				$prd3 = $this->f3->get('POST.tiga');
				$prd4 = $this->f3->get('POST.empat');
				$prd5 = $this->f3->get('POST.lima');
				$prd6 = $this->f3->get('POST.enam');
				$prd7 = $this->f3->get('POST.tujuh');
				$prd8 = $this->f3->get('POST.delapan');
				$prd9 = $this->f3->get('POST.sembilan');
				
				if(!is_null($prd1)){
					$penilaian->inputKlik($idpengguna,$prd1);
				}
				if(!is_null($prd2)){
					$penilaian->inputKlik($idpengguna,$prd2);
				}
				if(!is_null($prd3)){
					$penilaian->inputKlik($idpengguna,$prd3);
				}
				if(!is_null($prd4)){
					$penilaian->inputKlik($idpengguna,$prd4);
				}
				if(!is_null($prd5)){
					$penilaian->inputKlik($idpengguna,$prd5);
				}
				if(!is_null($prd6)){
					$penilaian->inputKlik($idpengguna,$prd6);
				}
				if(!is_null($prd7)){
					$penilaian->inputKlik($idpengguna,$prd7);
				}
				if(!is_null($prd8)){
					$penilaian->inputKlik($idpengguna,$prd8);
				}
				if(!is_null($prd9)){
					$penilaian->inputKlik($idpengguna,$prd9);
				}
				//untuk input terakhir dengan parameter 1 yang menandakan ini dari register
				$penilaian->inputRating(1);
				$this->f3->reroute('/pengguna');

			}
			else {
				$this->f3->reroute('/home');
			}
			
		}
		else{
			$this->f3->set('SESSION.message', "Sudah ada yang menggunakan email ini, pilih email lain !!");
			$this->f3->reroute('/home');
		}
		
		
//dry untuk ngecek kosong atau engga
		

	}

}

