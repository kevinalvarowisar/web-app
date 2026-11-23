<?php

use Illuminate\Support\Facades\Route;

Route::view('/', 'home', ['title' => 'Home'])->name('home');
Route::view('/product', 'product', ['title' => 'Product'])->name('product');
Route::view('/service', 'service', ['title' => 'Service'])->name('service');
Route::view('/contact', 'contact', ['title' => 'Contact'])->name('contact');
Route::view('/about', 'about', ['title' => 'About'])->name('about');
