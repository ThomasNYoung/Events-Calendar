@extends('layouts.master')
<style>

label{
	color: #00DFFC;
}
.btn-file {
    position: relative;
    overflow: hidden;
}
.btn-file input[type=file] {
    position: absolute;
    top: 0;
    right: 0;
    min-width: 100%;
    min-height: 100%;
    font-size: 100px;
    text-align: right;
    filter: alpha(opacity=0);
    opacity: 0;
    outline: none;
    background: white;
    cursor: inherit;
    display: block;
}
</style>
@section('content')


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

<script>
$(document).on('change', '.btn-file :file', function() {
  	var input = $(this),
    numFiles = input.get(0).files ? input.get(0).files.length : 1,
    label = input.val().replace(/\\/g, '/').replace(/.*\//, '');
  	input.trigger('fileselect', [numFiles, label]);
});
$(document).ready( function() {
    $('.btn-file :file').on('fileselect', function(user, numFiles, label) {
        
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