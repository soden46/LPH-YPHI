<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Profile;
use Illuminate\Http\Request;

class ProfileController extends Controller
{
    public function index()
    {
        $tentang = Profile::paginate(10);

        return view('admin.profile.tentang.index', compact('tentang'));
    }

    // Menampilkan form untuk membuat visi/misi baru
    public function create()
    {
        return view('admin.profile.tentang.create');
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
        Profile::create([
            'judul' => $request->judul,
            'isi' => $request->isi,
        ]);

        // Redirect dan tampilkan pesan sukses
        return redirect()->route('admin.profile.index')->with('success', 'Tentang berhasil ditambahkan');
    }

    // Menampilkan form untuk mengedit visi/misi yang ada
    public function edit($id)
    {
        // Cari data visi berdasarkan ID
        $tentang = Profile::findOrFail($id);

        return view('admin.profile.tentang.edit', compact('tentang'));
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
        $visi = Profile::findOrFail($id);
        $visi->update([
            'judul' => $request->judul,
            'isi' => $request->isi,
        ]);

        // Redirect dan tampilkan pesan sukses
        return redirect()->route('admin.profile.index')->with('success', 'Tentang berhasil diperbarui');
    }

    // Menghapus visi/misi dari database
    public function destroy($id)
    {
        // Cari dan hapus data visi/misi
        $visi = Profile::findOrFail($id);
        $visi->delete();

        // Redirect dan tampilkan pesan sukses
        return redirect()->route('admin.profile.index')->with('success', 'Tentang berhasil dihapus');
    }
}
