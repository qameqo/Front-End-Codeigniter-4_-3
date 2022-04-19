<?php

namespace App\Controllers;

class Account extends BaseController
{
	public function index()
	{
        echo view('templates/header');
		echo view('account');
        echo view('templates/footer');
	}
}