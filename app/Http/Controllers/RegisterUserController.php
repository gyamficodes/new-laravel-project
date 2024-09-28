<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Validation\Rules\Password;

class RegisterUserController extends Controller
{
    function create()
    {
        return view('auth.register');
    }
    function store()
    {
        //Validate
        $attributes =  request()->validate([
            'first_name' => ['required', 'min:3'],
            'last_name' => ['required'],
            'email' => ['required', 'email', 'max:254',],  //email confirmation
            'password' => ['required', Password::min(6), 'confirmed'] //For password Confirmation
        ]);

        
        //Create User
        $user =  User::create( $attributes);

        //Login
        Auth::login($user);

        // Redirect User To a certain page
        return redirect('/jobs');
    }
}
