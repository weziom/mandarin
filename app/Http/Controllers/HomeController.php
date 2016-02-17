<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Lesson;

class HomeController extends Controller
{
    public function index()
    {
        $lesson = new Lesson();

        return View('home.index', compact('lesson'));
    }
}
