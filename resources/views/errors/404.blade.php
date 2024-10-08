@extends('layouts.home.master', [
    'title' => '404 | Yayasan Produk Halal Indonesia',
    'pageTitle' => '404 | Yayasan Produk Halal Indonesia',
])
@section('content')
    <div
        class="flex items-center justify-center w-screen min-h-screen bg-gradient-to-r from-indigo-600 to-white-400 pt-2 pb-12">
        <div class="px-24 py-16 bg-white rounded-md shadow-xl max-w-6xl mx-auto">
            <div class="flex flex-col items-center">
                <h1 class="font-bold text-blue-600 text-6xl mb-4">404</h1>
                <img src="{{ asset('assets/img/logo.png') }}" alt="Logo" width="150" height="48" class="mb-6">
                <h6 class="mb-4 text-2xl font-bold text-center text-gray-800 md:text-1xl">
                    <span class="text-red-500">Oops!</span> Page Not Found - Yayasan Produk Halal Indonesia
                </h6>
                <p class="mb-8 text-center text-gray-500 md:text-lg">
                    Halaman Yang Anda Tuju Tidak Ditemukan.
                </p>

                <a href="{{ url()->previous() }}"
                    class="px-6 py-2 text-sm font-semibold text-blue-800 bg-blue-100 rounded-md">Kembali</a>
            </div>
        </div>
    </div>
@endsection
