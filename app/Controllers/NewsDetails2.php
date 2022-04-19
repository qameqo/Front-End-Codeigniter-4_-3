<?php

namespace App\Controllers;

class NewsDetails2 extends BaseController
{
	public function index()
	{
        echo view('templates/header');
		echo view('newsdetails2');
        echo view('templates/footer');
	}
}