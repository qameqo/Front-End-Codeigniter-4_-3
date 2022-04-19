<?php

namespace App\Controllers;

class Pages extends BaseController
{
	public function index()
	{
		// $session = \Config\Services::session($config);
		$session = session();
		$text = $this->request->getPost('text');
		$config = new \Config\Site();
		$data['default_title'] = $config->defaultTitle;
		$data['auth_required'] = $config->authRequired;
		$data['url'] = $config->url_api;
		if($text == "Logout"){
			if($session->has('email')){
				$session->destroy();
			}
		}
		echo view('templates/header');
		echo view('pages',$data);
		echo view('templates/footer');
        
	}
	
}
