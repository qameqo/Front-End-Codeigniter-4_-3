<?php

namespace App\Controllers;

class Director extends BaseController
{
	public function index()
	{
        echo view('templates/header');
		echo view('director');
        echo view('templates/footer');
	}
}