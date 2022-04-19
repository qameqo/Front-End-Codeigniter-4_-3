<?php

namespace App\Controllers;

class Crouse extends BaseController
{
	public function index()
	{
        echo view('templates/header');
		echo view('Crouse');
        echo view('templates/footer');
	}
}