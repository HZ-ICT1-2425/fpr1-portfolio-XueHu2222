<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\StaticContentController;
use App\Http\Controllers\PostController;
use App\Http\Controllers\FaqController;

Route::get('/', [StaticContentController::class, 'home'])->name('home');
Route::get('/dashboard', [StaticContentController::class, 'dashboard'])->name('dashboard');
Route::get('/profile', [StaticContentController::class, 'profile'])->name('profile');

/**
 * faqs part
 */
Route::resource('faqs', FaqController::class);
/**
 * posts part
 */
Route::resource('posts', PostController::class);
