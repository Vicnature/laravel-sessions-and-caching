<?php

namespace App\Http\Controllers;

use App\Models\SessionModel;
use Illuminate\Support\Facades\Session;
use Illuminate\Http\Request;

class PagesController extends Controller
{
    public function index(){
        Session::put('name','John Doe');

        // adds the key value pair specified into the name array.
        // Session::push('name','Mary Jane');
        Session::put('age',[30,35,40]);
        Session::flash("success","thankyou for creating session data");

        // removes the specified session property
        // Session::forget('name');
        // removes all session values.
        // Session::flush();

        // creates a new token
        // Session::regenerate();

        // if(Session::has('age')){
        //     dd('Name does exist');
        // }else{
        //     dd('name does not exist');
        // }

        // dd(
        //     Session::get('name')
        // );

        $session=SessionModel::all();
        dd(
            
            // displays an array of all contents found within the session table.
            // Session::all()
            $session
           
            
        
        );
        return view('index');
    }

    public function about(){
        return view('about');
    }
}
