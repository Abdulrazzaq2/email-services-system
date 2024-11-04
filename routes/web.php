<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PagesController;
use Illuminate\Support\Facades\Auth;

Route::get('/', [PagesController::class, 'index']);
Route::get('/write-email', [PagesController::class, 'writemail']);
Route::post('/store', [PagesController::class, 'store']);
Route::post('/save-email', [PagesController::class, 'savemail']);

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
