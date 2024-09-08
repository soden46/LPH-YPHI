<?php

use App\Http\Controllers\Admin\KontakController;
use App\Http\Controllers\Admin\PartnerController;
use App\Http\Controllers\Admin\ProfileController;
use App\Http\Controllers\Admin\VisiController;
use App\Http\Controllers\ContactController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\LoginController;
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
Route::get('/home', [HomeController::class, 'index'])->name('home')->middleware('guest');
Route::get('/profile', [HomeController::class, 'profile'])->middleware('guest');
Route::get('/struktur-organisasi', [HomeController::class, 'struktur'])->middleware('guest');
Route::get('/auditor', [HomeController::class, 'AuditorHalal'])->middleware('guest');
Route::get('/proses-sertifikasi', [HomeController::class, 'ProsesSertifikasi'])->middleware('guest');
Route::get('/proses-pencabutan-sertifikasi', [HomeController::class, 'ProsesPencabutanSertifikasi'])->middleware('guest');
Route::get('/kontak', [HomeController::class, 'Kontak'])->middleware('guest');
Route::post('/contact/send', [ContactController::class, 'send'])->name('contact.send');
Route::get('/dashboard', [DashboardController::class, 'index'])->name('dashboard');

Route::get('/admin', [LoginController::class, 'index'])->name('admin');
Route::post('/admin/authenticate', [LoginController::class, 'authenticate'])->name('admin.auth');
Route::post('/admin/logout', [LoginController::class, 'logout'])->name('logout');

Route::middleware(['role:Admin'])->prefix('admin')->group(function () {
    // CRUD Profile
    Route::get('/profile', [ProfileController::class, 'index'])->name('admin.profile.index'); // Read
    Route::get('/profile/create', [ProfileController::class, 'create'])->name('admin.profile.create'); // Create form
    Route::post('/profile', [ProfileController::class, 'store'])->name('admin.profile.store'); // Store
    Route::get('/profile/{id}/edit', [ProfileController::class, 'edit'])->name('admin.profile.edit'); // Edit form
    Route::put('/profile/{id}', [ProfileController::class, 'update'])->name('admin.profile.update'); // Update
    Route::delete('/profile/{id}', [ProfileController::class, 'destroy'])->name('admin.profile.destroy'); // Delete

    // CRUD Partner
    Route::get('/partner', [PartnerController::class, 'index'])->name('admin.partner.index'); // Read
    Route::get('/partner/create', [PartnerController::class, 'create'])->name('admin.partner.create'); // Create form
    Route::post('/partner', [PartnerController::class, 'store'])->name('admin.partner.store'); // Store
    Route::get('/partner/{id}/edit', [PartnerController::class, 'edit'])->name('admin.partner.edit'); // Edit form
    Route::put('/partner/{id}', [PartnerController::class, 'update'])->name('admin.partner.update'); // Update
    Route::delete('/partner/{id}', [PartnerController::class, 'destroy'])->name('admin.partner.destroy'); // Delete

    // CRUD Visi Misi
    Route::get('/visi', [VisiController::class, 'index'])->name('admin.visi.index'); // Read
    Route::get('/visi/create', [VisiController::class, 'create'])->name('admin.visi.create'); // Create form
    Route::post('/visi', [VisiController::class, 'store'])->name('admin.visi.store'); // Store
    Route::get('/visi/{id}/edit', [VisiController::class, 'edit'])->name('admin.visi.edit'); // Edit form
    Route::put('/visi/{id}', [VisiController::class, 'update'])->name('admin.visi.update'); // Update
    Route::delete('/visi/{id}', [VisiController::class, 'destroy'])->name('admin.visi.destroy'); // Delete

    // CRUD Kontak
    Route::get('/kontak', [KontakController::class, 'index'])->name('admin.kontak.index'); // Read
    Route::get('/kontak/create', [KontakController::class, 'create'])->name('admin.kontak.create'); // Create form
    Route::post('/kontak', [KontakController::class, 'store'])->name('admin.kontak.store'); // Store
    Route::get('/kontak/{id}/edit', [KontakController::class, 'edit'])->name('admin.kontak.edit'); // Edit form
    Route::put('/kontak/{id}', [KontakController::class, 'update'])->name('admin.kontak.update'); // Update
    Route::delete('/kontak/{id}', [KontakController::class, 'destroy'])->name('admin.kontak.destroy'); // Delete
});
