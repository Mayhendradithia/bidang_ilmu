<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class coursesAdminController extends Controller
{
    public function courseAdmin()
    {
        return view('admin.coursesAdmin');
    }
}
