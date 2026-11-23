<?php

use App\Http\Controllers\EmployeController;
use Illuminate\Support\Facades\Route;

// Menampilkan form tambah pegawai
Route::get('/employe/create', [EmployeController::class, 'create']);

// Menyimpan data pegawai
Route::post('/employe', [EmployeController::class, 'store']);

Route::get('/employe', [EmployeController::class, 'index']);
Route::view('/', 'home', ['title' => 'Home'])->name('home');
Route::view('/product', 'product', ['title' => 'Product'])->name('product');
Route::view('/service', 'service', ['title' => 'Service'])->name('service');
Route::view('/contact', 'contact', ['title' => 'Contact'])->name('contact');
Route::view('/about', 'about', ['title' => 'About'])->name('about');
// Menampilkan form edit pegawai
Route::get('/employe/{id}/edit', [EmployeController::class, 'edit']);

// Memperbarui data pegawai
Route::put('/employe/{id}', [EmployeController::class, 'update']);
// Menghapus data pegawai
Route::delete('/employe/{id}', [EmployeController::class, 'destroy']);