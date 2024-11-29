<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\FrontendController;

Route::get('/', [FrontendController::class, 'home'])->name('home');
Route::get('/about', [FrontendController::class, 'about'])->name('about');
Route::get('/book', [FrontendController::class, 'book'])->name('booking');
Route::get('/menu', [FrontendController::class, 'menu'])->name('menu');

