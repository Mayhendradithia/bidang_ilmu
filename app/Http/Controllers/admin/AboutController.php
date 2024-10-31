<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Models\About; // Pastikan untuk menambahkan ini
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage; // Pastikan untuk menambahkan ini

class AboutController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $about = About::all();
        return view('about.index', compact('about'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('about.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'title' => 'required|string|max:255',
            'description' => 'required|string',
            'image' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048'
        ]);

        $about = new About();
        $about->title = $request->title;
        $about->description = $request->description;

        if ($request->hasFile('image')) {
            $about->image = $request->file('image')->store('about_images', 'public');
        }

        $about->save();

        return redirect()->route('konfigurasi.index')->with('success', 'Data berhasil ditambahkan');
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        $about = About::findOrFail($id);
        return view('about.edit', compact('about'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        $request->validate([
            'title' => 'required|string|max:255',
            'description' => 'required|string',
            'image' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048'
        ]);

        $about = About::findOrFail($id);
        $about->title = $request->title;
        $about->description = $request->description;

        if ($request->hasFile('image')) {
            // Hapus gambar lama jika ada
            if ($about->image) {
                Storage::disk('public')->delete($about->image);
            }
            $about->image = $request->file('image')->store('about_images', 'public');
        }

        $about->save();

        return redirect()->route('about.index')->with('success', 'Data berhasil diperbarui');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        $about = About::findOrFail($id);

        // Hapus gambar jika ada
        if ($about->image) {
            Storage::disk('public')->delete($about->image);
        }

        $about->delete();

        return redirect()->route('about.index')->with('success', 'Data berhasil dihapus');
    }
}
