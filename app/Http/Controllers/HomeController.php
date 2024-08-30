<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Caffe;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Auth;

class HomeController extends Controller
{
    public function index()
    {
        return view('home.index');
    }

    public function profile()
    {
        return view('home.profile');
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

    public function Kontak()
    {
        return view('home.kontak');
    }
}
