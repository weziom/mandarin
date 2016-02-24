<?php

namespace App\Http\Controllers;

use App\Http\Requests;
use Illuminate\Http\Request;
use Auth;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
        // If already logged in redirect to lessons page
        if(Auth::check()) {
            return redirect('lessons');
        }

        // Not logged in, ask for login
        return view('home.index');
    }
}
