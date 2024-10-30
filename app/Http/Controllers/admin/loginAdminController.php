<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Models\Admin;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class loginAdminController extends Controller
{
    public function formAdmin ()
    {
        return view('admin.loginAdmin');  // View login
    }

    public function admin(Request $request)
    {
        // Validasi input
        $request->validate([
            'email' => 'required|email',
            'password' => 'required',
        ]);

        // Data login dari request
        $credentials = $request->only('email', 'password');

        // Cek apakah autentikasi dengan guard admin berhasil
        if (Auth::guard('admin')->attempt($credentials, $request->has('remember'))) {
            // Kalau berhasil, redirect ke dashboard
            return redirect()->route('dashbord');
        }

        // Kalau gagal, kembali ke halaman login dengan error
        return back()->withErrors([
            'email' => 'Email atau password salah.',
        ]);
    }



    // Logout
    public function logoutAdmin()
{
    Auth::guard('admin')->logout(); 
    
    
    session()->invalidate();
    session()->regenerateToken();

    
    return redirect()->route('formAdmin');
}

}