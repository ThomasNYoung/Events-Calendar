@extends('layouts.master')

@section('content')



<div class="container">
        <h1 class="create">Create an Profile</h1>

        {{ Form::open(array('action' => array('UsersController@store'), 'files'=>true)) }}
            <div class="form-group @if($errors->has('band_name')) has-error @endif">
                {{ Form::label('band_name', 'Band Name') }}
                {{ Form::text('band_name', null, array('class' => 'form-control')) }}
            </div>

            <div class="form-group @if($errors->has('band_name')) has-error @endif">
                {{ Form::label('email', 'Band eMail') }}
                {{ Form::email('email', null, array('class' => 'form-control')) }}
            </div>

            <div class="form-group">
                {{ Form::label('password', 'Password') }}
                {{ Form::password('password', array('class' => 'form-control')) }}
            </div>



         	<div class="form-group">
                {{ Form::label('password_confirmation', 'Password Confirmation') }}
                {{ Form::password('password_confirmation', array('class' => 'form-control')) }}
            </div>
            

            <div class="form-group @if($errors->has('band_name')) has-error @endif">
                {{ Form::label('genre', 'Genre') }}
                {{ Form::text('genre', null, array('class' => 'form-control')) }}
            </div>

            <div class="form-group @if($errors->has('band_name')) has-error @endif">
                {{ Form::label('about', 'About the Band') }}
                {{ Form::textarea('about', null, array('class' => 'form-control')) }}
            </div>

          

            <div class="form-group">
                <div class="col-md-6">
                    <div class="input-group">
                        <span class="input-group-btn">
                            <span class="btn btn-info btn-file">Upload Image 
                            {{ Form::file('img', null, array('class' => 'form-control')) }}
                            </span>
                        </span>
                    </div>
                </div>
            </div>
            <div class="clearfix"></div>
            <br>
            <button class="btn btn-primary">Create Profile!</button>
        {{ Form::close() }}
      </div>
 
@stop

@section('scripts')

 <script>
 $(document).on('change', '.btn-file :file', function() {
  var input = $(this),
      numFiles = input.get(0).files ? input.get(0).files.length : 1,
      label = input.val().replace(/\\/g, '/').replace(/.*\//, '');
  input.trigger('fileselect', [numFiles, label]);
});
$(document).ready( function() {
    $('.btn-file :file').on('fileselect', function(event, numFiles, label) {
        
        var input = $(this).parents('.input-group').find(':text'),
            log = numFiles > 1 ? numFiles + ' files selected' : label;
        
        if( input.length ) {
            input.val(log);
        } else {
            if( log ) alert(log);
        }
        
    });
});
 </script>
@stop
