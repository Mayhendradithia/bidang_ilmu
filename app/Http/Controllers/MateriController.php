<?php

namespace App\Http\Controllers;

use App\Models\Kategori;
use App\Models\Materi;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class MateriController extends Controller
{

    public function create()
    {
        // Ambil data kategori untuk digunakan di dropdown
        $kategori = Kategori::all();

        // Tampilkan view create dengan data kategori
        return view('materi.create', compact('kategori'));
    }



    public function index()
    {
        $kategori = Kategori::all();

        // Menampilkan data materi yang sesuai dengan user yang sedang login
        $materi = Materi::where('user_id', auth()->id())->get();

        return view('materi.index', compact('materi'));
    }


    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'title' => 'required|string|max:255',
            'kategori_id' => 'required|integer|exists:kategoris,id',
            'overview' => 'required|string',
            'benefit' => 'required|string',
            'description' => 'required|string',
            'video' => 'nullable|url|max:255', // Validasi untuk URL
        ]);

        $validatedData['user_id'] = auth()->id(); // Mengambil ID pengguna yang sedang login

        // Buat Materi baru dengan data yang telah divalidasi
        Materi::create($validatedData);

        return redirect()->route('materi.index')->with('success', 'Materi berhasil dibuat.');
    }


    public function edit($id)
    {
        $materi = Materi::findOrFail($id);
        return view('materi.edit', compact('materi'));
    }

    public function update(Request $request, $id)
    {
        $validatedData = $request->validate([
            'title' => 'required|string|max:255',
            'kategori_id' => 'required|integer',
            'overview' => 'required|string',
            'benefit' => 'required|string',
            'description' => 'required|string',
            'video' => 'nullable|url|max:255', // Validasi untuk URL
        ]);

        $materi = Materi::findOrFail($id);

        // Update materi dengan data yang telah divalidasi
        $materi->update($validatedData);

        return redirect()->route('materi.index')->with('success', 'Materi berhasil diupdate.');
    }



    public function destroy($id)
    {
        $materi = Materi::findOrFail($id);
        $materi->delete();

        return redirect()->route('materi.index')->with('success', 'Materi berhasil dihapus.');
    }
}
