<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreUserRequest;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class AuthController extends Controller
{
    public function login()
    {
        return view('Auth.login');
    }

    public function register()
    {
        return view('Auth.register');
    }

    public function authenticate(Request $request)
    {
        $request->only('email', 'password');

        $validated = $request->validate([
            'email' => 'required|email',
            'password' => 'required|min:8|max:255',
        ]);

        if (Auth::attempt($validated)) {
            $request->session()->regenerate();

            return redirect()->route('home')->with('success', 'User logged-in successfully !!!');
        }
        return redirect()->route('login')->withErrors([
            'email' => 'No matching user found with the provided email and password'
        ]);
    }

    public function store(User $user, StoreUserRequest $request)
    {
        $user->create([
            'name' => $request['name'],
            'email' => $request['email'],
            'password' => Hash::make($request['password']),
        ]);

        return redirect()->route('login')->with('success', 'Account created successfully !!!');
    }

    public function logout()
    {
        auth()->logout();

        request()->session()->invalidate();

        request()->session()->regenerateToken();

        return redirect()->route('home')->with('success', 'Account logged-out successfully !!!');
    }
}
