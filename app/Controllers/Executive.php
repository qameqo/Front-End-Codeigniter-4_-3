<?php

namespace App\Controllers;

class Executive extends BaseController
{
	public function index()
	{
        echo view('templates/header');
		echo view('executive');
        echo view('templates/footer');
	}
}