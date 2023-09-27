<?php

namespace App\Http\Controllers;

use GuzzleHttp\Psr7\Request;
use Illuminate\Auth\Events\Validated;

class AuthManager extends Controller
{
    function login(){
        return view('login');
    }
    function loginPost(Request $request){
        $request->validate([
            'email'=>'required',
            'password'=>'required'
        ]);
          $credentials = $request->only('email', 'password');
          if(AuthManager:: attempt($credentials)){
              return redirect()->intended(route('home'));
          }
          return redirect(route('login'))->with('error', 'wrong details');

    }

    function registration(){
        return view('registration');
    }

    function registrationPost(){

    }
}
