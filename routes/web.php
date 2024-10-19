<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PagesController;

Route::get('/', [PagesController::class, 'index']);
Route::get('/write-email', [PagesController::class, 'writemail']);
Route::post('/store', [PagesController::class, 'store']);
Route::post('/save-email', [PagesController::class, 'savemail']);
Route::get('/w', function (){
    return view("welcome");
});
Route::get('/core', function (){
    return view("core");
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
