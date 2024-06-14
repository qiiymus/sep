<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AuthController extends Controller
{
    // Show login form
    public function showLoginForm()
    {
        return view('Manage User Profile.LoginPage');
    }

    // Process login
    public function login(Request $request)
    {
        // Validate login data
        $credentials = $request->validate([
            'id' => 'required',
            'password' => 'required',
            'role' => 'required|in:parent,teacher,KAFA admin,MUIP admin',
        ]);

        // Attempt to log in the user
        if (Auth::attempt($credentials)) {
            // Authentication was successful
            return redirect()->intended('/'); // Redirect to intended page after login
        }

        // Authentication failed
        return redirect()->back()->withInput($request->only('id', 'role'))
            ->with('error', 'Invalid credentials');
    }

    // Logout
    public function logout()
    {
        Auth::logout();
        return redirect('/')->with('success', 'Logged out successfully');
    }
}
