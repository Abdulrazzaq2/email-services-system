<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PagesController extends Controller
{
    public function index(){
        return view('index');
    }
    public function sendmail(){
        return view('sendmail');
    }
    public function store(Request $request){
        return view('store');
    }
}
