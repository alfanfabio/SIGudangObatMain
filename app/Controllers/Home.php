<?php

namespace App\Controllers;

class Home extends BaseController
{
    public function index()
    {
        return view('auth/login');
    }

    public function registrasi()
    {
        return view('auth/register');
    }

    public function home()
    {
        return view('layout/home');
    }

    public function dashboard()
    {
        return view('layout/dashboard');
    }

    public function tentang()
    {
        return view('layout/tentang');
    }
}
