<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Validation\ValidationException;

class LoginController extends Controller
{
    //
    public function create()
    {
        return view('users.create');
    }

    public function destroy()
    {
        auth()->logout();

        return redirect('/')->with('success', 'Goodbye!');
    }

    public function login()
    {
        $user = request()->validate([
            'email' => 'required|email',
            'password' => 'required',
        ]);

        if (!auth()->attempt($user)) {
            throw ValidationException::withMessages([
                'email' => 'your provided credentials could not be verified',
            ]);
        }

        return redirect('/')->with('success', 'welcome back!');

    }
}
