<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Log;

class LoginController extends Controller
{
    // public function __construct()
    // {
    //     $this->middleware(['auth','verified']);
    // }

    public function index()
    {
        return view('login.index', [
            'judul' => 'Login',
            'active' => 'login'
        ]);
    }


    public function authenticate(Request $request)
    {
        $credentials = $request->validate([
            'email' => 'required',
            'password' => 'required'
        ]);

        Log::info('Attempting to login with credentials:', $credentials);

        if (Auth::attempt($credentials)) {
            $request->session()->regenerate();
            Log::info('Login successful');
            return redirect()->intended('/dashboard');
        }

        Log::warning('Login failed');
        return back()->with('error', 'Login Error');
    }


    public function logout()
    {
        Auth::logout();
        Request()->session()->invalidate();
        Request()->session()->regenerate();

        return redirect()->route('home');
    }
}
