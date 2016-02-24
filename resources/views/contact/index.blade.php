@extends('layout')

@section('content')
   <h3>Contact</h3>

      {!! Form::open(['class' => 'form-horizontal']) !!}
         <div class="form-group">
            {!! Form::label('name', 'Name:', ['class' => 'control-label col-sm-2']) !!}
            <div class="col-sm-10">
               {!! Form::text('name', $username, ['class' => 'form-control']) !!}

               @if ($errors->has('name'))
                  <span class="help-block">
                    <strong>{{ $errors->first('name') }}</strong>
                </span>
               @endif
            </div>
         </div>

         <div class="form-group">
            {!! Form::label('email', 'Email:', ['class' => 'control-label col-sm-2']) !!}
            <div class="col-sm-10">
               {!! Form::email('email', $email, ['class' => 'form-control']) !!}

               @if ($errors->has('email'))
                  <span class="help-block">
                    <strong>{{ $errors->first('email') }}</strong>
                </span>
               @endif
            </div>
         </div>

         <div class="form-group">
            {!! Form::label('message', 'Message:', ['class' => 'control-label col-sm-2']) !!}
            <div class="col-sm-10">
               {!! Form::textarea('message', null, ['class' => 'form-control']) !!}

               @if ($errors->has('message'))
                  <span class="help-block">
                    <strong>{{ $errors->first('message') }}</strong>
                </span>
               @endif
            </div>
         </div>

         <div class="form-group">
            <div class="col-sm-offset-2 col-sm-10">
               {!! Form::submit('Send email', ['class' => 'btn btn-primary form-control']) !!}
            </div>
         </div>
      {!! Form::close() !!}
@stop