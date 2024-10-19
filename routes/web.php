<?php

use Illuminate\Support\Facades\Route;

Route::get('/', ['App\Http\Controllers\PagesController', 'index']);
Route::get('/sendmail', ['App\Http\Controllers\PagesController', 'sendmail']);
Route::get('/w', function (){
    return view("welcome");
});
Route::get('/core', function (){
    return view("core");
});
