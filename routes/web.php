<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BookingController;
use App\Http\Controllers\GaleriAdminController;
use App\Models\Galeri;

Route::get('/', function () {
    $galeris = Galeri::where('is_active', true)
        ->orderBy('sort_order')
        ->orderBy('created_at', 'desc')
        ->get();

    return view('welcome', compact('galeris'));
});

Route::post('/book', [BookingController::class, 'store'])->name('book.store');

// Admin Auth
Route::get('/admin/login', [\App\Http\Controllers\AdminAuthController::class, 'showLoginForm'])->name('admin.login');
Route::post('/admin/login', [\App\Http\Controllers\AdminAuthController::class, 'login'])->name('admin.login.submit');
Route::post('/admin/logout', [\App\Http\Controllers\AdminAuthController::class, 'logout'])->name('admin.logout');

// Admin Galeri (protected)
Route::middleware(['web', 'admin:1'])->group(function () {
    Route::get('/admin/galeri', [GaleriAdminController::class, 'index'])->name('admin.galeri.index');
    Route::get('/admin/galeri/create', [GaleriAdminController::class, 'create'])->name('admin.galeri.create');
    Route::post('/admin/galeri', [GaleriAdminController::class, 'store'])->name('admin.galeri.store');
    Route::post('/admin/galeri/{galeri}/delete', [GaleriAdminController::class, 'destroy'])->name('admin.galeri.destroy');
});


