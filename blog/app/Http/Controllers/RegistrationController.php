<?php

namespace App\Http\Controllers;

use App\Http\Requests\RegistrationRequest;


class RegistrationController extends Controller
{
    public function create()
    {
        return view('registration.create');
    }

    public function store(RegistrationRequest $request)
    {
        $request->persist();

        session()->flash('message', 'Here is a default message!');

        //Redirect to home page
        return redirect()->home();
    }
}
