<?php

namespace App\Controllers\Parent;

use App\Controllers\BaseController;

class Dashboard extends BaseController
{
    public function index()
    {
        return view('parent/dashboard');
    }
}
