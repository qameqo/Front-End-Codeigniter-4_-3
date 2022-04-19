<?php

namespace App\Controllers;

class Lecturer extends BaseController
{
	public function index()
	{
        echo view('templates/header');
		echo view('lecturer');
        echo view('templates/footer');
	}
}