<?php

namespace App\Http\Controllers\premium;

use App\Http\Controllers\Controller;
use App\Models\Kategori;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class dashboardMeController extends Controller
{

    public function dashboardDosen()
    {


        // Kirim data ke view
        return view('UserAdmin.index');
    }
}

