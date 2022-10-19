<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Validation\Rule;
use App\Models\User;
use Illuminate\Support\Facades\Redis;

class UserController extends Controller
{
    // Show Register Form
    public function create()
    {
        return view('register');
    }

    // Create New User
    public function store(Request $request)
    {
        // dd($request->all());
        $formFields = $request->validate([
            'name' => ['required', 'min:3'],
            'email' => ['required', 'email', Rule::unique('users', 'email')],
            'password' => 'required|confirmed|min:6'
        ]);

        // Hash Password
        $formFields['password'] = bcrypt($formFields['password']);

        // Create user
        $user = User::create($formFields);

        // Login
        auth()->login($user);

        return redirect('index');
    }


    // Logout User
    public function logout(Request $request)
    {
        auth()->logout();

        $request->session()->invalidate();
        $request->session()->regenerateToken();

        return redirect('index');
    }


    //  Show Login Form
    public function login()
    {
        return view('login');
    }

    // Login User
    public function authenticate(Request $request)
    {
        // dd($request->all());
        $formFields = $request->validate([
            'email' => ['required', 'email'],
            'password' => 'required'
        ]);

        if (auth()->attempt($formFields)) {
            $request->session()->regenerate();

            return redirect('index');
        }

        return back()->withErrors(['email' => 'Invalid Credentials'])->onlyInput('email');
    }
}
