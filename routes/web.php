<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\ContactController;

Route::view('/', 'home')->name('home');
Route::view('/detail', 'detail')->name('news.detail');
Route::view('/search', 'search')->name('news.search');
Route::view('/tentang', 'about')->name('about');
Route::view('/redaksi', 'redaksi')->name('redaksi');
Route::get('/kontak', [ContactController::class, 'create'])->name('contact');
Route::post('/kontak', [ContactController::class, 'store'])->middleware('throttle:5,1')->name('contact.store');
Route::view('/pedoman', 'pedoman')->name('pedoman');
Route::view('/categories', 'categories')->name('categories');
