<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class SessionController extends Controller
{
    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('auth.login');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        // validate the request data
        $credentials = $request->validate([
            'email' => ['required', 'email', 'max:255', 'string'],
            'password' => ['required', 'string'],
            // you can add more validation rules here if needed, like min length, etc. but for login, we typically just check that it's required and a string
        ]);

        // attempt to log the user in
        if (Auth::attempt($credentials)) {
            $request->session()->regenerate();  // prevent session fixation attacks

            return redirect('/ideas');
        }

        return back()->withErrors([
            'email' => 'The provided credentials do not match our records.',
        ]);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy()
    {
        Auth::logout();

        return redirect('/ideas');
    }
}
