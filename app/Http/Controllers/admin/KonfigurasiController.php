<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Models\benefit;
use App\Models\Konfigurasi;
use App\Models\mitra;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class KonfigurasiController extends Controller
{
    /**
     * Display a listing of the resource.
     */
     // Menampilkan semua konfigurasi
     public function index()
     {
         $konfigurasi = Konfigurasi::all();
         $mitras = mitra::all();
         $benefits = benefit::all();
         return view('admin.landingAdmin', compact('konfigurasi', 'mitras','benefits'));
     }
 
     // Menampilkan form untuk membuat konfigurasi baru
     public function create()
     {
         return view('admin.konfigurasi.create');
     }
 
     // Menyimpan konfigurasi baru
     public function store(Request $request)
     {
         $request->validate([
             'title' => 'required',
             'description' => 'required',
             'image' => 'nullable|image|mimes:jpeg,png,jpg,gif,svg,webp|max:2048',
         ]);
 
         $data = $request->all();
 
         // Jika ada file image yang diupload, simpan
         if ($request->hasFile('image')) {
             $data['image'] = $request->file('image')->store('images', 'public');
         }
 
         Konfigurasi::create($data);
         return redirect()->route('konfigurasi.index')->with('success', 'Konfigurasi berhasil dibuat.');
     }
 
     // Menampilkan satu konfigurasi
     public function show($id)
     {
         $konfigurasi = Konfigurasi::findOrFail($id);
         return view('admin.konfigurasi.show', compact('konfigurasi'));
     }
 
     // Menampilkan form edit konfigurasi
     public function edit($id)
     {
         $konfigurasi = Konfigurasi::findOrFail($id);
         return view('admin.konfigurasi.edit', compact('konfigurasi'));
     }
     
     // Mengupdate konfigurasi yang sudah ada
     public function update(Request $request, $id)
     {
         $request->validate([
             'title' => 'required',
             'description' => 'required',
             'image' => 'nullable|image|mimes:jpeg,png,jpg,gif,svg,webp|max:2048',
         ]);
     
         $konfigurasi = Konfigurasi::findOrFail($id);
         $data = $request->all();
     
         if ($request->hasFile('image')) {
             if ($konfigurasi->image) {
                 Storage::delete('public/' . $konfigurasi->image);
             }
             $data['image'] = $request->file('image')->store('images', 'public');
         }
     
         $konfigurasi->update($data);
         return redirect()->route('konfigurasi.index')->with('success', 'Konfigurasi berhasil diupdate.');
     }
     
     
 
     // Menghapus konfigurasi
     public function destroy($id)
     {
         $konfigurasi = Konfigurasi::findOrFail($id);
 
         // Hapus file image jika ada
         if ($konfigurasi->image) {
             Storage::delete('public/' . $konfigurasi->image);
         }
 
         $konfigurasi->delete();
         return redirect()->route('konfigurasi.index')->with('success', 'Konfigurasi berhasil dihapus.');
     }
}