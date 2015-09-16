@extends('layouts.master')

@section('content')
    
    <h1 class="edit">{{ $users->band_name }}</h1>

    {{ Form::model($users, array('action' => array('UsersController@update', $users->id), 'method' => 'PUT', 'files'=>true)) }}
        @include('users.create')
    {{ Form::close() }}

@stop


