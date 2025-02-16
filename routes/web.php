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
Route::get('/faqs', [FaqController::class, 'index'])->name('faqs.index');
Route::get('/faqs/create', [FaqController::class, 'create'])->name('faqs.create');
Route::post('/faqs', [FaqController::class, 'store'])->name('faqs.store');
Route::get('/faqs/{faq}', [FaqController::class, 'show'])->name('faqs.show');

/**
 * posts part
 */
Route::get('/posts', [PostController::class, 'index'])->name('posts.index');
Route::get('/posts/create', [PostController::class, 'create'])->name('posts.create');
Route::post('/posts', [PostController::class, 'store'])->name('posts.store');
Route::get('/posts/{post}', [PostController::class, 'show'])->name('posts.show');
