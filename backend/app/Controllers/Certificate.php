<?php

namespace App\Controllers;

class Certificate extends BaseController
{
	public function index()
	{
        echo view('templates/header');
		echo view('certificate');
        echo view('templates/footer');
	}
}