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

// CMS Console Routes
use App\Http\Controllers\Console\ConsoleAuthController;
use App\Http\Controllers\Console\ConsoleDashboardController;
use App\Http\Controllers\Console\ConsoleContactController;
use App\Http\Controllers\Console\ConsoleUserController;
use App\Http\Controllers\Console\ConsoleNewsController;

Route::prefix('console')->name('console.')->group(function () {
    // Guest only routes
    Route::middleware('guest')->group(function () {
        Route::get('/login', [ConsoleAuthController::class, 'showLogin'])->name('login');
        Route::post('/login', [ConsoleAuthController::class, 'login']);
    });

    // Authenticated only routes
    Route::middleware('auth')->group(function () {
        Route::get('/dashboard', [ConsoleDashboardController::class, 'index'])->name('dashboard');
        Route::post('/logout', [ConsoleAuthController::class, 'logout'])->name('logout');
        Route::resource('/contacts', ConsoleContactController::class)->only(['index', 'show', 'destroy']);
        Route::resource('/users', ConsoleUserController::class);
        Route::get('/tags/search', [ConsoleNewsController::class, 'searchTags'])->name('tags.search');
        Route::resource('/news', ConsoleNewsController::class);
    });
});

