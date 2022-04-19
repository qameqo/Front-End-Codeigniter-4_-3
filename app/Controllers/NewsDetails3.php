<?php

namespace App\Controllers;

class NewsDetails3 extends BaseController
{
	public function index()
	{
        echo view('templates/header');
		echo view('newsdetails3');
        echo view('templates/footer');
	}
}