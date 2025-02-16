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
Route::get('/faqs/{faq}/edit', [FaqController::class, 'edit'])->name('faqs.edit');
Route::put('/faqs/{faq}', [FaqController::class, 'update'])->name('faqs.update');
Route::delete('/faqs/{faq}', [FaqController::class, 'destroy'])->name('faqs.destroy');

/**
 * posts part
 */
Route::get('/posts', [PostController::class, 'index'])->name('posts.index');
Route::get('/posts/create', [PostController::class, 'create'])->name('posts.create');
Route::post('/posts', [PostController::class, 'store'])->name('posts.store');
Route::get('/posts/{post}', [PostController::class, 'show'])->name('posts.show');
Route::get('/posts/{post}/edit', [PostController::class, 'edit'])->name('posts.edit');
Route::put('posts/{post}', [PostController::class, 'update'])->name('posts.update');
Route::delete('/posts/{post}', [PostController::class, 'destroy'])->name('posts.destroy');
