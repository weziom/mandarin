@extends('layout')

@section('content')
    <h1>{{ $lesson->title }}</h1>
    <h3>{{ $lesson->description }}</h3>
    <small>uid: {{ $lesson->user_id }}</small>
@stop