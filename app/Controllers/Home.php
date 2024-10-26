<?php

namespace App\Controllers;

class Home extends BaseController
{
    public function index()
    {
        return view('home/landing'); // Menampilkan landing page
    }

    public function dashboard()
    {
        return 'dashboard page';
    }
}
