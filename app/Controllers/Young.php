<?php

namespace App\Controllers;

class Young extends BaseController
{
	public function index()
	{
        echo view('templates/header');
		echo view('young');
        echo view('templates/footer');
	}
}
