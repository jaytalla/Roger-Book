<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Validation\Rules\Password;

class RegisterController extends Controller
{
    public function create()
    {
        return view('auth.register');
    }

    public function store()
    {
        // validate - store - logged in - redirect
        $inputs = request()->validate([
            'username' => ['required', 'min:5', 'max:20', 'unique:users,username'],
            'email' => ['required', 'email', 'unique:users,email'],
            'password' => ['required', Password::min(5), 'confirmed']
        ]);

        $user = User::create($inputs);
        Auth::login($user);
        return redirect('/home');
    }
}
