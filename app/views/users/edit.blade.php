@extends('layouts.master')
<style>

    h1{
        color: #00DFFC;
    }

    label {
        color: #00DFFC;
    }

</style>
@section('content')
    
    <h1 class="edit">{{ $user->band_name }}</h1>

    {{ Form::model($user, array('action' => array('UsersController@update', $user->id), 'method' => 'PUT', 'files'=>true)) }}
       

		<div class="form-group @if($errors->has('band_name')) has-error @endif">
		    {{ Form::label('band_name', 'Band') }}
		    {{ Form::text('band_name', null, ['class' => 'form-control']) }}
		</div>

		<div class="form-group @if($errors->has('email')) has-error @endif">
		    {{ Form::label('email', 'Band eMail') }}
		    {{ Form::email('email', null, ['class' => 'form-control']) }}
		</div>

		<div class="form-group @if($errors->has('genre')) has-error @endif">
		    {{ Form::label('genre', 'Genre') }}
		    {{ Form::text('genre', null, ['class' => 'form-control']) }}
		</div>

		<div class="form-group @if($errors->has('about')) has-error @endif">
		    {{ Form::label('about', 'About') }}
		    {{ Form::textarea('about', null, ['class' => 'form-control']) }}
		</div>

		<div class="form-group">
			
			{{ Form::file('img_path') }}
		</div>
		  

		<button class="btn btn-primary">Save</button>


    {{ Form::close() }}

@stop


