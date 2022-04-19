<?php

namespace App\Controllers;

class NewsDetails extends BaseController
{
	public function index()
	{
        echo view('templates/header');
		echo view('newsdetails');
        echo view('templates/footer');
	}
}