<?php

namespace App\Controllers;

class Login extends BaseController
{
	public function index()
	{
        $data = array(
            "page_title" => "Bagudbud | Login"
        );
		return view('login', $data);
	}
}
