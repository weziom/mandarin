<?php

namespace App\Http\Controllers;

use DB;
use Illuminate\Http\Request;

use App\Http\Requests;
use App\Lesson;
use App\Http\Controllers\Controller;
use Auth;
use App\Http\Requests\CreateLessonRequest;

class LessonsController extends Controller
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
        $users = DB::table('users')->get();

        /* Logged in user */
        $user = Auth::user();

        /* $lessons = DB::table('lessons')->get(); */
        $lessons = Lesson::where('user_id', $user->id)->get();

        if($user == "Grace Tu-Cook" || $user == "Lee Cook") {
            $lessons = Lesson::all();
            return View('lessons.index-admin', compact('lessons', 'user'));
        }

        return View('lessons.index', compact('lessons', 'user'));
    }

    public function show(Lesson $lesson)
    {
        return View('lessons.show', compact('lesson'));
    }

    public function delete(Lesson $lesson)
    {
        $lesson = Lesson::find($lesson->id);
        $lesson->delete();

        return back();
    }

    public function store(CreateLessonRequest $request)
    {
        $lesson = new Lesson;
        $lesson->title = $request->title;
        $lesson->user_id = $request->atendee;
        $lesson->description = $request->description;
        $lesson->save();

        return back();
    }
}
