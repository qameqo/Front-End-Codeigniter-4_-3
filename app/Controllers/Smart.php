<?php

namespace App\Controllers;

class Smart extends BaseController
{
	public function index()
	{
        echo view('templates/header');
		echo view('smart');
        echo view('templates/footer');
	}
}