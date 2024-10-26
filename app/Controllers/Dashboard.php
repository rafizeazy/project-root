<?php

namespace App\Controllers;

use App\Controllers\BaseController;

class Dashboard extends BaseController
{
    public function index()
    {
        // Memuat view dashboard/index.php
        return view('dashboard/index');
    }
}
