<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SessionsController extends Controller
{
    public function __construct()
    {
        $this->middleware('guest', ['except' => 'destroy']);
    }

    public function create()
    {
        return view('sessions.create');
    }

    public function destroy()
    {
        auth()->logout();

        return redirect()->home();
    }

    public function store()
    {
        //Attempt to authenticate, if so, sign in
        if (! auth()->attempt(request(['email','password'])) ) {
            //If not redirect back
            return back()->withErrors([
                'message' => 'Please check your credentials and try again'
            ]);
        }

        //Redirect to home page
        return redirect()->home();
    }
}
