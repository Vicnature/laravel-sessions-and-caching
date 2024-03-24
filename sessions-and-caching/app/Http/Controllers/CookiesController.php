<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

class CookiesController extends Controller
{
    // create cookie and show a text on the webpage
    public function setCookie(){
        $response=response('Hello Cookie');
        $response->withCookie('cookie_consent',Str::uuid(),1);
        return $response;
    }

    public function homeCookie(){
        $response=response('Hello Cookie');

        // if the request has no cookie,return a view and set a cookie.Else,just return a view
        if(!request()->hasCookie('cookie_consent')){
        // returns a view response with the cookie embedded in it.
        //To successfully set a cookie,you must return it as a response.
        // set cookie called "cookie_consent",for a period of 1 minute.
        
        return response(view('welcome'))->withCookie('cookie_consent',Str::uuid(),1);
        }
        dd('cookie set');
        
        
    }

    // retrieve the cookie and view it
    public function getCookie(){
        return request()->cookie('cookie_consent');
    }

    // remove cookie and display the phrase "deleted"
    public function deleteCookie(){
        // removes the cookie by setting it with a null value and the time value being -1.
        return response('deleted')->cookie('cookie_consent',null,-1);
    }
}
