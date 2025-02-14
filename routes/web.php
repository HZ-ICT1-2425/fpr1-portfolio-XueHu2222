<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\StaticContentController;

Route::get('/', [StaticContentController::class, 'home'])->name('home');
Route::get('/dashboard', [StaticContentController::class, 'dashboard'])->name('dashboard');
Route::get('/profile', [StaticContentController::class, 'profile'])->name('profile');
Route::get('/faq', [StaticContentController::class, 'faq'])->name('faq');

Route::get('/posts', [StaticContentController::class, 'index'])->name('posts.index');





