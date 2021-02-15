<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BlogController;


Route::get('/', [BlogController::class, 'index']);
Route::get('/category/{slug}', [BlogController::class, 'getPostsByCategory'])->name('getPostsByCategory');
Route::get('/category/{slug_category}/{slug_post}', [BlogController::class, 'getPost'])->name('getPost');
