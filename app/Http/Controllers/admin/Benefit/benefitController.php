<?php

namespace App\Http\Controllers\admin\Benefit;

use App\Http\Controllers\Controller;
use App\Models\benefit;
use Illuminate\Http\Request;

class benefitController extends Controller

{
    public function index()
    {
        $benefits = benefit::all();
        return view('admin.landingAdmin', compact('benefit'));
    }

    public function create()
    {
        return view('admin.benefit.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'title' => 'required',
            'caption' => 'required',
            'title_benefit' => 'required',
            'description' => 'required',
            'image' => 'required|image|mimes:jpg,png,jpeg|max:2048',
            'icon' => 'required|image|mimes:jpg,png,jpeg|max:2048',
        ]);

        $benefits = new benefit($request->only(['title', 'caption', 'title_benefit', 'description','image','icon']));

        if ($request->hasFile('image')) {
            $benefits->image = $request->file('image')->store('images', 'public');
        }
        if ($request->hasFile('icon')) {
            $benefits->icon = $request->file('icon')->store('icons', 'public');
        }

        $benefits->save();

        return redirect()->route('konfigurasi.index')->with('success', 'Post created successfully.');
    }


    public function edit(benefit $benefit)
    {
        return view('admin.benefit.edit', compact('benefit'));
    }

    public function update(Request $request, benefit $benefit)
    {
        $request->validate([
            'title' => 'required',
            'caption' => 'required',
            'title_benefit' => 'required',
            'description' => 'required',
            'image' => 'required|image|mimes:jpg,png,jpeg|max:2048',
            'icon' => 'required|image|mimes:jpg,png,jpeg|max:2048',
        ]);

        $benefit->fill($request->only(['title', 'caption', 'title_benefit', 'description']));

        if ($request->hasFile('image')) {
            $benefit->image = $request->file('image')->store('images', 'public');
        }
        if ($request->hasFile('icon')) {
            $benefit->icon = $request->file('icon')->store('icons', 'public');
        }

        $benefit->save();

        return redirect()->route('konfigurasi.index')->with('success', 'Post updated successfully.');
    }

    public function destroy(benefit $benefit)
    {
        $benefit->delete();
        return redirect()->route('konfigurasi.index')->with('success', 'Post deleted successfully.');
    }
}
