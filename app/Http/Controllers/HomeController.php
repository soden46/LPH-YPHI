<?php

namespace App\Http\Controllers;

use App\Models\About;
use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Caffe;
use App\Models\Kontak;
use App\Models\Partner;
use App\Models\Profile;
use App\Models\VisiMisi;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Auth;

class HomeController extends Controller
{
    public function index()
    {
        $tentang = Profile::where('judul', 'TENTANG LPH YPHI')->first()->isi;

        $mengapa = Profile::where('judul', 'Mengapa Harus Memilih LPH YPHI')->first()->isi;
        $about = About::get();
        $kontak = Kontak::get();
        $partner = Partner::get();
        $visi = VisiMisi::get();
        $no_hp = Kontak::first()->no_hp;
        $alamat = Kontak::first()->alamat;
        $email = Kontak::first()->email;
        return view('home.index', compact('tentang', 'mengapa', 'about', 'kontak', 'partner', 'visi', 'no_hp', 'alamat', 'email'));
    }

    public function profile()
    {
        $visi = VisiMisi::where('judul', 'visi')->first()->isi;
        $misi = VisiMisi::where('judul', 'misi')->first()->isi;
        $sejarah = Profile::where('judul', 'Sejarah')->first()->isi;
        return view('home.profile', compact('visi', 'misi', 'sejarah'));
    }

    public function struktur()
    {
        return view('home.struktur');
    }

    public function AuditorHalal()
    {
        return view('home.auditor');
    }

    public function ProsesSertifikasi()
    {
        return view('home.proses-sertifikasi');
    }

    public function ProsesPencabutanSertifikasi()
    {
        return view('home.proses-pencabutan-sertifikasi');
    }

    public function Kontak()
    {
        $no_hp = Kontak::first()->no_hp;
        $alamat = Kontak::first()->alamat;
        $email = Kontak::first()->email;
        return view('home.kontak', compact('no_hp', 'alamat', 'email'));
    }
}
