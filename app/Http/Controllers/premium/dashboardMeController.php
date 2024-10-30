<?php

namespace App\Http\Controllers\premium;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class dashboardMeController extends Controller
{

    public function dashboardDosen()
    {
        return view('UserAdmin.index');
    }
}

