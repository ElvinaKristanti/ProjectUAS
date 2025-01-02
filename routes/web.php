<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return redirect()->route('login');
});

// Rute untuk login dan logout menggunakan AuthController
Route::get('login', [AuthController::class, 'showLoginForm'])->name('login');
Route::post('login', [AuthController::class, 'login']);
Route::post('logout', [AuthController::class, 'logout'])->name('logout');

// Rute untuk dashboard dan halaman utama setelah login
Route::get('/dashboard', function () {
    // Redirect langsung ke halaman students
    return redirect()->route('students.index');
})->middleware(['auth', 'verified'])->name('dashboard');




