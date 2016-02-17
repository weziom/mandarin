@extends('layout')

@section('content')
    <h1>Lessons</h1>

    @foreach($lessons as $lesson)
        <div><a href="lessons/{{$lesson->id}}">{{$lesson->title}}</a></div>
    @endforeach

    <h1>Add a new lesson</h1>

    <form method="post" action="/lessons/create">
        <div class="form-group">
            <input class="form-control" type="text" name="title">
        </div>

        <div class="form-group">
            <textarea class="form-control" name="description"></textarea>
        </div>

        <div class="form-group">
            <button type="submit" class="btn btn-primary">Add lesson</button>
        </div>
    </form>
@stop