<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\invesmenController;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\LamaranController;
use App\Http\Controllers\EmailUndanganController;
use App\Http\Controllers\Laporan\LaporanCaffeController;
use App\Http\Controllers\Laporan\LaporanPelamarController;
use App\Http\Controllers\Laporan\LaporanPenerimaanController;
use App\Http\Controllers\Laporan\LaporanLowonganController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\NewsController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\Pelamar\PelamarController;
use App\Http\Controllers\Pelamar\ProfileController;
use App\Http\Controllers\Admin\AdminController;
use App\Http\Controllers\Admin\DataKaryawanController;
use App\Http\Controllers\Admin\NewsAdminController;
use App\Http\Controllers\Admin\TambahCaffeController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\LaporanPelamarController as ControllersLaporanPelamarController;
use FontLib\Table\Type\name;
use Illuminate\Support\Facades\Artisan;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/



Route::get('/linkstorage', function () {
    Artisan::call('storage:link');
});

Route::get('', [HomeController::class, 'index'])->middleware('guest');
Route::get('/home', [HomeController::class, 'index'])->middleware('guest');
Route::get('/profile', [HomeController::class, 'profile'])->middleware('guest');
Route::get('/struktur-organisasi', [HomeController::class, 'struktur'])->middleware('guest');
Route::get('/auditor', [HomeController::class, 'AuditorHalal'])->middleware('guest');
Route::get('/proses-sertifikasi', [HomeController::class, 'ProsesSertifikasi'])->middleware('guest');
Route::get('/proses-pencabutan-sertifikasi', [HomeController::class, 'ProsesPencabutanSertifikasi'])->middleware('guest');
Route::get('/kontak', [HomeController::class, 'Kontak'])->middleware('guest');

Route::post('/contact/send', [ContactController::class, 'send'])->name('contact.send');
