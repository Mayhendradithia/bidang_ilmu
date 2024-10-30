<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Models\mitra;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class MitraController extends Controller
{
    
    public function index()
{
    $mitras = mitra::all(); // Ambil semua data mitra dari database
    dd($mitras);
    return view('admin.landingAdmin', compact('mitras'));
     // Tampilkan ke view
}


    public function create()
{
    return view('admin.mitra.create');
}


public function store(Request $request)
{
    // Validasi data yang diterima
    $validatedData = $request->validate([
        'image' => 'required|image|mimes:jpeg,png,jpg,gif,svg,webp|max:2048'
    ]);

    // Buat instance baru dari model Mitra
    $mitra = new Mitra();

    // Cek apakah ada file yang diunggah
    if ($request->hasFile('image')) {
        // Simpan gambar ke dalam folder public/mitra_images
        // (store('mitra_images') akan menyimpannya di storage/app/public/mitra_images)
        $mitra->image = $request->file('image')->store('mitra_images', 'public');
    }

    // Simpan data mitra ke database
    $mitra->save();

    // Redirect kembali dengan pesan sukses
    return redirect()->route('konfigurasi.index')->with('success', 'Konfigurasi berhasil diupdate.');
}


    // Fungsi untuk mengupdate gambar
    public function update(Request $request, Mitra $mitra)
    {
        $validatedData = $request->validate([
            'image' => 'required|image|mimes:jpeg,png,jpg,svg,webp|max:2048'
        ]);

        // Hapus gambar lama jika ada
        if ($mitra->image) {
            Storage::delete($mitra->image);
        }

        // Upload gambar baru
        if ($request->hasFile('image')) {
            $mitra->image = $request->file('image')->store('mitra_images');
        }

        $mitra->save();

        return redirect()->back()->with('success', 'Gambar berhasil diupdate');
    }

    // Fungsi untuk menghapus gambar
    public function destroy(Mitra $mitra)
    {
        if ($mitra->image) {
            Storage::delete($mitra->image);
        }

        $mitra->delete();

        return redirect()->back()->with('success', 'Gambar berhasil dihapus');
    }
}