@extends('layouts.master')

@section('content')
    
    <h1>{{ $users->band_name }}</h1>

    {{ Form::model($users, array('action' => array('UsersController@update', $post->id), 'method' => 'PUT', 'files'=>true)) }}
        @include('users.create-edit-form')
    {{ Form::close() }}

@stop


