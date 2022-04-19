<?php

namespace App\Controllers;

class PersonDetails extends BaseController
{
	public function index()
	{
        echo view('templates/header');
		echo view('persondetails');
        echo view('templates/footer');
	}
}