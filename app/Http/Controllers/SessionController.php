<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class SessionController extends Controller
{
    public function create()
    {
        return view('auth.login');
    }

    public function store()
    {
        //validate
  $attributes   =  request()->validate([
           'email' => ['required', 'email'],
           'password' => ['required']
        ]);
        //attempt to login
        Auth::attempt($attributes);
        //regenerate the token session
        request()->session()->regenerate();
        //redirect
         return redirect('/jobs');
    }
    public function destroy()
    {
        Auth::logout();
        return redirect('/');
    }
}
