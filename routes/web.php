<?php

use Illuminate\Support\Facades\Route;

Route::get('/', ['App\Http\Controllers\PagesController', 'index']);
Route::get('/w', function (){
    return view("welcome");
});
