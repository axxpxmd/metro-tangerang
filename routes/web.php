<?php

use Illuminate\Support\Facades\Route;

Route::view('/', 'home')->name('home');
Route::view('/detail', 'detail')->name('news.detail');
Route::view('/search', 'search')->name('news.search');
Route::view('/tentang', 'about')->name('about');
Route::view('/redaksi', 'redaksi')->name('redaksi');
Route::view('/kontak', 'contact')->name('contact');
Route::view('/pedoman', 'pedoman')->name('pedoman');
Route::view('/categories', 'categories')->name('categories');
