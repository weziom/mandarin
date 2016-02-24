@extends('layout-auth')

@section('content')
    <div class="row">
    <h4>Welcome, {{ $user->name }} <span> | </span><a href="{{ url('logout') }}">Logout</a></h4>
    <h3>Overview of Lessons</h3>

    @if (count($lessons))
        @foreach($lessons as $lesson)
            <div>
                <a href="{{ url('lessons/delete') }}/{{ $lesson->id }}">X</a>
                <span> | </span>
                <a href="lessons/{{ $lesson->id }}">{{ $lesson->title }}</a></div>
        @endforeach
    @else
        <p>No lessons have been added yet.</p>
    @endif
    </div>

    <div class="row">
    <h3>Add a new lesson</h3>

        {!! Form::open() !!}
        <div class="form-group">
            {!! Form::label('atendee', 'Student:') !!}
            {!! Form::text('atendee', null, ['class' => 'form-control']) !!}
        </div>

        <div class="form-group">
            {!! Form::label('title', 'Title:') !!}
            {!! Form::text('title', null, ['class' => 'form-control']) !!}

            @if ($errors->has('title'))
                <span class="help-block">
                    <strong>{{ $errors->first('title') }}</strong>
                </span>
            @endif
        </div>

        <div class="form-group">
            {!! Form::label('desription', 'Description:') !!}
            {!! Form::textarea('description', null, ['class' => 'form-control']) !!}

            @if ($errors->has('description'))
                <span class="help-block">
                    <strong>{{ $errors->first('description') }}</strong>
                </span>
            @endif
        </div>
        {!! Form::submit('Add a new lesson', ['class' => 'btn btn-primary btn-info form-control']) !!}
        {!! Form::close() !!}
    </div>
@stop