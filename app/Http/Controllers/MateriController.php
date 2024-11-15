<?php

namespace App\Http\Controllers;

use App\Models\Kategori;
use App\Models\Materi;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class MateriController extends Controller
{
    public function index()
    {
        $kategori = Kategori::all();
        
        // Menampilkan data materi yang sesuai dengan user yang sedang login
        $materi = Materi::where('user_id', auth()->id())->get(); 
        
        return view('materi.index', compact('materi'));   
    }
    

    public function create()
    {
        $kategori = Kategori::all();
        return view('materi.create',compact('kategori')); // Menampilkan form untuk membuat materi baru
    }

    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'title' => 'required|string|max:255',
            'kategori_id' => 'required|integer|exists:kategoris,id',
            'overview' => 'required|string',
            // 'user_id' tidak perlu divalidasi dari input karena kita akan mendapatkannya dari pengguna yang login
            'benefit' => 'required|string',
            'description' => 'required|string',
            'video' => 'nullable|file|mimetypes:video/mp4,video/mpeg,video/avi,video/x-matroska|max:10240', // Validasi file video
        ]);
    
        // Tambahkan user_id dari pengguna yang sedang login
        $validatedData['user_id'] = auth()->id(); // Mengambil ID pengguna yang sedang login
    
        // Jika ada file video, upload dan simpan path-nya
        if ($request->hasFile('video')) {
            $videoFile = $request->file('video');
            
            // Tentukan path tujuan penyimpanan
            $destinationPath = public_path('storage/videos'); // Pastikan direktori ini ada dan memiliki izin tulis
            $videoName = time() . '_' . $videoFile->getClientOriginalName(); // Memberikan nama unik pada file
            
            // Memindahkan file ke folder tujuan
            $videoFile->move($destinationPath, $videoName);
            
            // Simpan path relatif untuk disimpan dalam database
            $validatedData['video'] = 'videos/' . $videoName;
        }
    
        // Buat Materi baru dengan data yang telah divalidasi
        Materi::create($validatedData);
    
        // Redirect dengan pesan sukses
        return redirect()->route('materi.index')->with('success', 'Materi berhasil dibuat.');
    }
    

    public function show($id)
    {
        $materi = Materi::findOrFail($id);
        return view('materi.show', compact('materi'));
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
            'user_id' => 'required|integer|exists:users,id', // Validasi user_id
            'benefit' => 'required|string',
            'description' => 'required|string',
            'video' => 'nullable|file|mimetypes:video/mp4,video/mpeg,video/avi|max:10240', // Validasi file video
        ]);
    
        $materi = Materi::findOrFail($id);
    
        // Jika ada file video baru yang di-upload, hapus file lama dan simpan yang baru
        if ($request->hasFile('video')) {
            // Hapus video lama jika ada (opsional)
            if ($materi->video) {
                Storage::disk('public')->delete($materi->video);
            }
        
            // Simpan video baru menggunakan move()
            $videoFile = $request->file('video');
            $destinationPath = public_path('storage/videos'); // Sesuaikan path direktori tujuan
            $videoName = time() . '_' . $videoFile->getClientOriginalName(); // Penamaan file baru
            $videoFile->move($destinationPath, $videoName);
        
            // Simpan nama file ke dalam data yang akan disimpan di database
            $validatedData['video'] = 'videos/' . $videoName;
        }
        
    
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


