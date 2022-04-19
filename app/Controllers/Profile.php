<?php

namespace App\Controllers;

class Profile extends BaseController
{
	// public function index()
	// {
	// 		echo view('templates/header');
	// 		echo view('profile');
	// 		echo view('templates/footer');
	// }
	public function index(){
		$session = \Config\Services::session($config);
		if($session->has('id'))
		{
				echo view('templates/header');
				echo view('profile');
				echo view('templates/footer');
		}else{
			$email = $this->request->getPost('email');
			$id = $this->request->getPost('id');
			$firstname = $this->request->getPost('firstname');
			$lastname = $this->request->getPost('lastname');
			$mobile = $this->request->getPost('mobile');
			$picture = $this->request->getPost('picture');
			
			if($id != ""){
				$newdata = [
					'id'  => $id,
					'email'  => $email,
					'firstname'  => $firstname,
					'lastname'  => $lastname,
					'mobile'  => $mobile,
					'picture'  => $picture,
				];
				$session->set($newdata);
				echo view('templates/header');
				echo view('profile');
				echo view('templates/footer');
			}
		}
	}
}