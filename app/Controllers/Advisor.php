<?php

namespace App\Controllers;

class Advisor extends BaseController
{
	public function index()
	{
        echo view('templates/header');
		echo view('advisor');
        echo view('templates/footer');
	}
}