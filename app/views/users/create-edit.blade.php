@extends(layouts.master)
@section('content')

<div class="form-group @if($errors->has('band_name')) has-error @endif">
    {{ Form::label('band_name', 'Band') }}
    {{ Form::text('band_name', null, ['class' => 'form-control']) }}
</div>

<div class="form-group @if($errors->has('about')) has-error @endif">
    {{ Form::label('about', 'About') }}
    {{ Form::textarea('about', null, ['class' => 'form-control']) }}
</div>

<div class="form-group">
	
	{{ Form::file('img_path') }}
</div>
  

<button class="btn btn-primary">Save</button>


@stop