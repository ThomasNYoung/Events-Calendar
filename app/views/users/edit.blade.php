@extends('layouts.master')

@section('content')
    
    <h1 class="edit">{{ $user->band_name }}</h1>

    {{ Form::model($user, array('action' => array('UsersController@update', $user->id), 'method' => 'PUT', 'files'=>true)) }}
        @include('users.create')
    {{ Form::close() }}

@stop


