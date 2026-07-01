<?php

namespace App\Controllers\Admin;

use App\Controllers\BaseController;

class Content extends BaseController
{
    public function courses()
    {
        return view('admin/courses');
    }

    public function blogs()
    {
        return view('admin/blogs');
    }

    public function users()
    {
        return view('admin/users');
    }

    public function settings()
    {
        return view('admin/settings');
    }
}
