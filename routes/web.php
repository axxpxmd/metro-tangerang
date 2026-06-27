<?php

use Illuminate\Support\Facades\Route;

Route::view('/', 'home')->name('home');
Route::view('/detail', 'detail')->name('news.detail');
Route::view('/search', 'search')->name('news.search');

