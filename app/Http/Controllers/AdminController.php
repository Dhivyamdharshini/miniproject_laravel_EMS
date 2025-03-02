<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function showLogin()
    {
        return view('admin.login');
    }

    public function login(Request $request)
    {
        // Define fixed username and password
        $fixedUsername = 'admin@ldc';
        $fixedPassword = 'password123';

        // Validate input
        $request->validate([
            'email' => 'required|email',
            'password' => 'required'
        ]);

        // Check if credentials match
        if ($request->email == $fixedUsername && $request->password == $fixedPassword) {
            // Redirect to event scheduling page
            return redirect()->route('event.create')->with('success', 'Login Successful!');
        } else {
            return back()->withErrors(['Invalid Credentials! Please try again.']);
        }
    }
}
