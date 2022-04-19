<?php

namespace App\Controllers;

class User extends BaseController
{
	public function index()
	{
        echo view('templates/header');
		echo view('user');
        echo view('templates/footer');
	}
}