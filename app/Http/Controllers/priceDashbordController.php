<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class priceDashbordController extends Controller
{
    public function priceDashbord()
    {
        $user=Auth::user();
        return view('priceDashbord',compact('user'));
    }
}
