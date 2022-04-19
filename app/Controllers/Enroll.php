<?php

namespace App\Controllers;

class Enroll extends BaseController
{
	
	public function index()
	{
        echo view('templates/header');
		echo view('enroll');
        echo view('templates/footer');
	}
}