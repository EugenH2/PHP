<?php

namespace App\Http\Controllers;

use Auth;
use Illuminate\Http\Request;
use App\Models\User;

class RegisteredUserController extends Controller
{
    public function create()
    {
        return view('auth/register');
    }

    public function store()
    {
        $attributes = request()->validate([
            'email' => ['required', 'email', 'max:254', 'confirmed','unique:users,email'],
            'password' => ['required', 'min:4', 'max:254'],
            'name' => ['required', 'min:3', 'max:254']
        ]);

        $user = User::create($attributes);
        
        Auth::login($user);

        return redirect('/');
    }
}
