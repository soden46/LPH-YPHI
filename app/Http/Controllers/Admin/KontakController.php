<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Kontak;
use Illuminate\Http\Request;

class KontakController extends Controller
{
    // Menampilkan daftar kontak
    public function index()
    {
        $kontaks = Kontak::paginate(10);
        return view('admin.kontak.index', compact('kontaks'));
    }

    // Menampilkan form tambah kontak
    public function create()
    {
        return view('admin.kontak.create');
    }

    // Menyimpan data kontak baru
    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'email' => 'required|email',
            'no_hp' => 'required|max:12',
            'alamat' => 'required',
        ]);

        Kontak::create($validatedData);

        return redirect()->route('admin.kontak.index')->with('success', 'Kontak berhasil ditambahkan');
    }

    // Menampilkan form edit kontak
    public function edit($id)
    {
        $kontak = Kontak::findOrFail($id);
        return view('admin.kontak.edit', compact('kontak'));
    }

    // Memperbarui data kontak
    public function update(Request $request, $id)
    {
        $validatedData = $request->validate([
            'email' => 'required|email',
            'no_hp' => 'required|max:12',
            'alamat' => 'required',
        ]);

        $kontak = Kontak::findOrFail($id);
        $kontak->update($validatedData);

        return redirect()->route('admin.kontak.index')->with('success', 'Kontak berhasil diperbarui');
    }

    // Menghapus kontak
    public function destroy($id)
    {
        $kontak = Kontak::findOrFail($id);
        $kontak->delete();

        return redirect()->route('admin.kontak.index')->with('success', 'Kontak berhasil dihapus');
    }
}
