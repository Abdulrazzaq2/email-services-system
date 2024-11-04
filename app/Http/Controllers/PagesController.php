<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use App\Mail\SuppurtEmail;

class PagesController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */ //TODO: uncomment this function
    // public function __construct()
    // {
    //     $this->middleware('auth');
    // }
    /**
     * function name: index
     * description: to return the view of index page
     * @return view
     */
    public function index(){
        return view('index');
    }
    /**
     * function name: writemail
     * description: to input email form details for client 
     * @return view
     */
    public function writemail(){
        // return view of /write-email page
        return view('writemail');
    }
    /**
     * function name: store
     * description: to send  email to the receiver(s)
     * @param Request $request
     * @return redirect to index page
     */
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
