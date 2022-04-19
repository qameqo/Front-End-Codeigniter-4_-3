<?php

namespace App\Controllers;

class News extends BaseController
{
	public function index()
	{
        echo view('templates/header');
		echo view('news');
        echo view('templates/footer');
	}
}
