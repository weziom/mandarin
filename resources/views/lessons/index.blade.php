@extends('layout-auth')

@section('content')
    <div class="row">
        <h4>Welcome, {{ $user->name }} <span> | </span><a href="{{ url('logout') }}">Logout</a></h4>
    <h3>Overview of Lessons</h3>

    @if (count($lessons))
        @foreach($lessons as $lesson)
            <div><a href="lessons/{{$lesson->id}}">{{$lesson->title}}</a></div>
        @endforeach
    @else
        <p>No lessons have been added yet.</p>
    @endif
    </div>
@stop