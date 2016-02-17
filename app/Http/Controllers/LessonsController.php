<?php

namespace App\Http\Controllers;

use DB;
use Illuminate\Http\Request;

use App\Http\Requests;
use App\Lesson;
use App\Http\Controllers\Controller;

class LessonsController extends Controller
{
    public function index()
    {
        /* $lessons = DB::table('lessons')->get(); */
        $lessons = Lesson::all();

        return View('lessons.index', compact('lessons'));
    }

    public function show(Lesson $lesson)
    {
        return View('lessons.show', compact('lesson'));
    }

    public function create(Request $request)
    {
        $lesson = new Lesson;
        $lesson->title = $request->title;
        $lesson->user_id = '2';
        $lesson->description = $request->description;
        $lesson->save();

        return back();
    }
}
