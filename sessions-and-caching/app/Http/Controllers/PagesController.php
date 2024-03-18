<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PagesController extends Controller
{
    public function index(){
        Session::put('name','John Doe');
        return view('index');
    }
}
