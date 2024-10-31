<?php

namespace App\Http\Controllers;

use App\Models\About;
use Illuminate\Http\Request;

class aboutUsController extends Controller
{
    

    public function about()
    {
        $about=About::all();
        return view('About Us.about',compact('about'));
    }
}
