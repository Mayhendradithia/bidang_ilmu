<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class superadminController extends Controller
{
    public function dashbord()
    {
        return view('admin.dashboard');
    }
}
