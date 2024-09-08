<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Partner;
use Illuminate\Support\Facades\Storage;

class PartnerController extends Controller
{
    /**
     * Menampilkan daftar partner.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $partners = Partner::paginate(10); // Mengambil 10 data per halaman
        return view('admin.partner.index', compact('partners'));
    }

    /**
     * Menampilkan form untuk membuat partner baru.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.partner.create');
    }

    /**
     * Menyimpan partner baru ke database.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // Validasi input form
        $request->validate([
            'nama_partner' => 'required|string|max:255',
            'logo_partner' => 'required|image|mimes:jpeg,png,jpg,gif|max:2048',
        ]);

        // Proses upload file logo
        if ($request->hasFile('logo_partner')) {
            $logoName = time() . '_' . $request->file('logo_partner')->getClientOriginalName();
            $path = $request->file('logo_partner')->storeAs('uploads/partners', $logoName, 'public');

            // Simpan data partner ke database
            Partner::create([
                'nama_partner' => $request->nama_partner,
                'logo_partner' => $path,
            ]);

            return redirect()->route('admin.partner.index')->with('success', 'Partner berhasil ditambahkan!');
        }

        return redirect()->back()->with('error', 'Gagal mengupload logo partner');
    }

    /**
     * Menampilkan detail partner.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $partner = Partner::findOrFail($id);
        return view('admin.partner.show', compact('partner'));
    }

    /**
     * Menampilkan form edit partner.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $partner = Partner::findOrFail($id);
        return view('admin.partner.edit', compact('partner'));
    }

    /**
     * Update partner yang sudah ada di database.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $partner = Partner::findOrFail($id);

        // Validasi input form
        $request->validate([
            'nama_partner' => 'required|string|max:255',
            'logo_partner' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',
        ]);

        // Cek apakah logo baru di-upload
        if ($request->hasFile('logo_partner')) {
            // Hapus logo lama
            if ($partner->logo_partner && Storage::exists('public/' . $partner->logo_partner)) {
                Storage::delete('public/' . $partner->logo_partner);
            }

            // Upload logo baru
            $logoName = time() . '_' . $request->file('logo_partner')->getClientOriginalName();
            $path = $request->file('logo_partner')->storeAs('uploads/partners', $logoName, 'public');
            $partner->logo_partner = $path;
        }

        // Update nama partner
        $partner->nama_partner = $request->nama_partner;
        $partner->save();

        return redirect()->route('admin.partner.index')->with('success', 'Partner berhasil diperbarui!');
    }

    /**
     * Menghapus partner dari database.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $partner = Partner::findOrFail($id);

        // Hapus logo dari storage
        if ($partner->logo_partner && Storage::exists('public/' . $partner->logo_partner)) {
            Storage::delete('public/' . $partner->logo_partner);
        }

        // Hapus data partner
        $partner->delete();

        return redirect()->route('admin.partner.index')->with('success', 'Partner berhasil dihapus!');
    }
}
