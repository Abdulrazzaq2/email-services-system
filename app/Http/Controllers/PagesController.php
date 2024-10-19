<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use App\Mail\SuppurtEmail;

class PagesController extends Controller
{
    // handling index route
    public function index(){
        return view('index');
    }
    //view for email form data 
    public function writemail(){
        return view('writemail');
    }
    //after submitting the form data
    public function store(Request $request){
        // receiver email, body and subject are returned from POST form '/write-email'
        $res = Mail::to($request->receiver)->send(new SuppurtEmail("every one", $request->body, $request->subject));
        return redirect("/")->with("res", $res);
    }
    //TODO: save emails to mysql server
    // public function savemail(Request $request){
    //     return $request->all();
    //     return view('savemail');
    // }
}
