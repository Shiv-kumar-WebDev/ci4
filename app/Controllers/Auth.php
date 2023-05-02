<?php

namespace App\Controllers;

class Auth extends BaseController
{
    public function index()
    {
        return view('login_page');
    }
    public function reg()
    {
        return view('register_page');
    }
}
