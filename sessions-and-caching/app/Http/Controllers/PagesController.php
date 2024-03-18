<?php

namespace App\Http\Controllers;

use App\Models\SessionModel;
use Illuminate\Support\Facades\Session;
use Illuminate\Http\Request;

class PagesController extends Controller
{
    public function index(){
        // Session::put('name',['John Doe']);

        // adds the key value pair specified into the name array.
        // Session::push('name','Mary Jane');
        // Session::put('age',[30,35,40]);

        // removes the specified session property
        // Session::forget('name');
        // removes all session values.
        // Session::flush();

        // creates a new token
        // Session::regenerate();

        // if(Session::has('at')){
        //     dd('Name does exist');
        // }else{
        //     dd('name does not exist');
        // }

        // dd(
        //     Session::get('name')
        // );

        $session=SessionModel::all();
        dd(

            // Session::all()
            // displays all the contents found within the session table.
            $session
        );
        return view('index');
    }

    public function about(){
        return view('about');
    }
}
