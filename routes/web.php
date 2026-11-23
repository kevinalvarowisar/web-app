
<?php

use App\Http\Controllers\EmployeController;
use App\Http\Controllers\AuthController;
use Illuminate\Support\Facades\Route;

// Halaman umum
Route::view('/', 'home', ['title' => 'Home'])->name('home');
Route::view('/product', 'product', ['title' => 'Product'])->name('product');
Route::view('/service', 'service', ['title' => 'Service'])->name('service');
Route::view('/contact', 'contact', ['title' => 'Contact'])->name('contact');
Route::view('/about', 'about', ['title' => 'About'])->name('about');

// Authentication
Route::get('/login', function () {
    return view('login');
});

Route::post('/login', [AuthController::class, 'cek']);

// Halaman yang wajib login
Route::middleware('islogin')->group(function () {

    // Dashboard
    Route::get('/dashboard', function () {
        return view('home', ['title' => 'Dashboard']);
    });

    // CRUD Employe
    Route::get('/employe', [EmployeController::class, 'index']);
    Route::get('/employe/create', [EmployeController::class, 'create']);
    Route::post('/employe', [EmployeController::class, 'store']);
    Route::get('/employe/{id}/edit', [EmployeController::class, 'edit']);
    Route::put('/employe/{id}', [EmployeController::class, 'update']);
    Route::delete('/employe/{id}', [EmployeController::class, 'destroy']);

    // Logout
    Route::get('/logout', [AuthController::class, 'logout']);
});
