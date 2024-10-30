<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class gridCourseController extends Controller
{
    public function gridCourse()
    {
        $user=Auth::user();
        return view('gridCourse',compact('user'));
    }
}
