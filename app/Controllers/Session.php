<?php

namespace App\Controllers;

class Session extends BaseController
{
	public function create()
	{
        $session = \Config\Services::session($config);
        $newdata = [
            'id'  => '1',
            'email'  => 'test@gmail.com',
        ];
        $session->set($newdata);
        var_dump($session);
	}
    public function check()
	{
        $session = \Config\Services::session($config);
        if($session->has('email')){
            echo $session->has('email');
            echo $session->has('id');
        }else{
            echo "no session";
        }
	}
    public function destroy()
	{
        $session = \Config\Services::session($config);
        if($session->has('email')){
            $session->destroy();
        }else{
            echo "no session";
        }
	}
}