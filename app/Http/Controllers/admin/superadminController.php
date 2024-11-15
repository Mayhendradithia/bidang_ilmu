<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Models\Kategori;
use Illuminate\Http\Request;

class superadminController extends Controller
{
    public function dashbord()
    {

        $totalKategori = Kategori::count();
        return view('admin.dashboard',compact('totalKategori'));
    }
}
