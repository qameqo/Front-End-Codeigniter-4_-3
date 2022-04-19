<?php

namespace App\Controllers;

class Payment extends BaseController
{
	public function index()
	{
        echo view('templates/header');
		echo view('payment');
        echo view('templates/footer');
	}
}