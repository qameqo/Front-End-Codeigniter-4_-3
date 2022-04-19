<?php

namespace App\Controllers;

class Person extends BaseController
{
	public function index()
	{
        echo view('templates/header');
		echo view('person');
        echo view('templates/footer');
	}
}