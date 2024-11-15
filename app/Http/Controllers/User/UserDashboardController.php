<?php

namespace App\Http\Controllers\User;

use Illuminate\Http\Request;

class UserDashboardController
{
    public function index()
    {
        return view('user.dashboard.index');
    }
}
