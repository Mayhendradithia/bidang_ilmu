<?php

namespace App\Http\Controllers;

use App\Models\Kategori;
use Illuminate\Http\Request;

class KategoriController extends Controller
{
    public function index()
    {
        $kategoris = Kategori::all();
        return view('kategoris.index', compact('kategoris'));
    }

    public function create()
    {
        return view('kategoris.create');
    }

    public function store(Request $request)
{
    try {
        // Validasi dan simpan kategori
        $request->validate([
            'nama' => 'required|string|max:255',
        ]);

        // Simpan data kategori
        Kategori::create([
            'nama' => $request->nama,
        ]);

        // Kirimkan pesan sukses dan redirect ke halaman index
        return redirect()->route('kategoris.create')->with('success', 'Kategori berhasil ditambahkan!');
    } catch (\Exception $e) {
        // Kirimkan pesan error jika ada kesalahan
        return redirect()->route('kategoris.create')->with('error', 'Terjadi kesalahan, kategori gagal ditambahkan.');
    }
}

    public function show(kategori $kategori)
    {
        return view('kategoris.show', compact('kategori'));
    }

    public function edit(Kategori $kategori)
    {
        return view('kategoris.edit', compact('kategori'));
    }

    public function update(Request $request, $id)
{
    $kategori = Kategori::findOrFail($id);
    $kategori->nama = $request->nama;
    $kategori->save();

    return redirect()->route('kategoris.index')->with('success', 'Kategori Berhasil Diperbarui');
}


    public function destroy(Kategori $kategori)
    {
        $kategori->delete();
        return redirect()->route('kategoris.index')->with('success', 'Kategori berhasil dihapus.');
    }
}
