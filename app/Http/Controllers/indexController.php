<?php

namespace App\Http\Controllers;

use App\Models\benefit;
use App\Models\Konfigurasi;
use App\Models\Mitra;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class indexController extends Controller
{
    public function index()
    {
        $konfigurasi = Konfigurasi::first();
        $mitra = Mitra::all();
        $benefit = benefit::all();
        $user = Auth::user();

        return view('index', compact('user', 'konfigurasi','mitra','benefit')); 


    }
}
