<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class courseViewController extends Controller
{
    public function courseOverview()
    {
        $user=Auth::user();
        return view('courseOverview',compact('user'));
    }
}
