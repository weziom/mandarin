<?php

namespace App\Http\Controllers;

use App\Http\Requests;
use Auth;

class ContactController extends Controller
{
    public function index()
    {
        $username = '';
        $email = '';

        // is user logged in?
        if(Auth::check()) {
            $username = Auth::user()->name;
            $email = Auth::user()->email;
        }

        return View('contact.index', compact('username', 'email'));

    }

    public function store(Requests\ContactRequest $request)
    {
        // send email
        return View('contact.sent');
    }
}
