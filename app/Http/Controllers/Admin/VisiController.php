<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\VisiMisi;
use Illuminate\Http\Request;

class VisiController extends Controller
{
    public function index()
    {
        // Mengambil semua data visi/misi dengan pagination
        $visi = VisiMisi::paginate(10);

        return view('admin.profile.visimisi.index', compact('visi'));
    }

    // Menampilkan form untuk membuat visi/misi baru
    public function create()
    {
        return view('admin.profile.visimisi.create');
    }

    // Menyimpan data visi/misi baru ke database
    public function store(Request $request)
    {
        // Validasi input
        $request->validate([
            'judul' => 'required|string|max:255',
            'isi' => 'required',
        ]);

        // Simpan data ke database
        VisiMisi::create([
            'judul' => $request->judul,
            'isi' => $request->isi,
        ]);

        // Redirect dan tampilkan pesan sukses
        return redirect()->route('admin.visi.index')->with('success', 'Visi/Misi berhasil ditambahkan');
    }

    // Menampilkan form untuk mengedit visi/misi yang ada
    public function edit($id)
    {
        // Cari data visi berdasarkan ID
        $visi = VisiMisi::findOrFail($id);

        return view('admin.profile.visimisi.edit', compact('visi'));
    }

    // Mengupdate data visi/misi di database
    public function update(Request $request, $id)
    {
        // Validasi input
        $request->validate([
            'judul' => 'required|string|max:255',
            'isi' => 'required',
        ]);

        // Cari data visi/misi berdasarkan ID dan update datanya
        $visi = VisiMisi::findOrFail($id);
        $visi->update([
            'judul' => $request->judul,
            'isi' => $request->isi,
        ]);

        // Redirect dan tampilkan pesan sukses
        return redirect()->route('admin.visi.index')->with('success', 'Visi/Misi berhasil diperbarui');
    }

    // Menghapus visi/misi dari database
    public function destroy($id)
    {
        // Cari dan hapus data visi/misi
        $visi = VisiMisi::findOrFail($id);
        $visi->delete();

        // Redirect dan tampilkan pesan sukses
        return redirect()->route('admin.visi.index')->with('success', 'Visi/Misi berhasil dihapus');
    }
}
