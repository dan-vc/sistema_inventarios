<?php

use App\Http\Controllers\InventoryController;
use Illuminate\Support\Facades\Route;
use Laravel\Socialite\Facades\Socialite;
use Illuminate\Support\Facades\Auth;


Route::get('/', function () {
    return view('welcome');
});

Auth::routes();


Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::resource('products', App\Http\Controllers\ProductController::class);


Route::get('login/google', [App\Http\Controllers\Auth\LoginController::class, 'redirectToGoogle']);
Route::get('login/google/callback', [App\Http\Controllers\Auth\LoginController::class, 'handleGoogleCallback']);

Route::get('login/github', [App\Http\Controllers\Auth\LoginController::class, 'redirectToGithub']);
Route::get('login/github/callback', [App\Http\Controllers\Auth\LoginController::class, 'handleGithubCallback']);

Route::get('login/facebook', [App\Http\Controllers\Auth\LoginController::class, 'redirectToFacebook']);
Route::get('login/facebook/callback', [App\Http\Controllers\Auth\LoginController::class, 'handleFacebookCallback']);


Route::middleware(['auth'])->get('/dashboard', function () {
    return view('/home');
});
