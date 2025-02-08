<?php

use App\Http\Controllers\StaticContentController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PostController;



Route::get('/', [StaticContentController::class, 'home'])
    ->name('home');

Route::get('/profile', [StaticContentController::class, 'profile'])
    ->name('profile');

Route::get('/dashboard', [StaticContentController::class, 'dashboard'])
    ->name('dashboard');

Route::get('/faq', [StaticContentController::class, 'faq'])
    ->name('faq');

Route::get('/posts', [PostController::class, 'index'])
    ->name('posts.index');

Route::get('/posts/{id}', [PostController::class, 'show'])
    ->name('posts.show');

