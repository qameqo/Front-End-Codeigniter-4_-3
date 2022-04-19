<?php

namespace App\Controllers;

class Signin extends BaseController
{
	public function index()
	{
		$config = new \Config\Site();
		$data['url_api'] = $config->url_api;
		$data['app_id'] = $config->app_id;
		$data['app_key'] = $config->app_key;
        echo view('templates/header',$data);
		echo view('signin');
        echo view('templates/footer');
	}
}