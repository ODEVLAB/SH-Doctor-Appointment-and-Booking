<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class RegisterController extends Controller
{
    //
    public function create()
    {
        return view('register.create');
    }

    public function store()
    {
        $user = request()->validate([
            'full_name' => 'required|max:255',
            'email' => 'required|email|max:255|unique:users,email',
            'username' => 'required|max:255|min:3|unique:users,username',
            'password' => 'required|max:255|min:6',
        ]);

        $user=User::create($user);

        auth()->login($user);

        return redirect('/')->with('success', 'Your account have been created');
    }
}
