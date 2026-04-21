<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Boneka;
use Illuminate\View\View;
use Illuminate\Http\RedirectResponse;

class BonekaController extends Controller
{
    public function index(): view
    {
        $bonekas = Boneka::latest()->paginate(4);
        return view('boneka.index', compact('bonekas'));
    }

    public function create(): view
    {
        return view('boneka.create');
    }

    public function store(Request $request): RedirectResponse
    {
        $request->validate([
            'nama' => 'required',
            'jenis' => 'required',
            'harga' => 'required|numeric',
            'stok' => 'required|numeric',
        ]);

        Boneka::create($request->all());
        return redirect()->route('boneka.index')->with('success', 'Boneka berhasil ditambahkan.');
    }

    public function edit(Boneka $boneka): view
    {
        return view('boneka.edit', compact('boneka'));
    }

    public function update(Request $request, Boneka $boneka): RedirectResponse
    {
        $request->validate([
            'nama' => 'required',
            'jenis' => 'required',
            'harga' => 'required|numeric',
            'stok' => 'required|numeric',
        ]);

        $boneka->update($request->all());
        return redirect()->route('boneka.index')->with('success', 'Boneka berhasil diupdate.');
    }

    public function show(Boneka $boneka): view
    {
        return view('boneka.show', compact('boneka'));
    }

    public function destroy(Boneka $boneka): RedirectResponse
    {
        $boneka->delete();
        return redirect()->route('boneka.index')->with('success', 'Boneka berhasil dihapus.');
    }
}