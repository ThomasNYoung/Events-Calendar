@extends('layouts.master')
<style>
table {
    color: rgba(255,255,255,1);
}
.create{
	color:black;
}
.manage{
	color: rgba(255,255,255,1);
}
.modal-body{
	color: black;
}

label{
	color: black;
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
.div-button
{
    margin-left: 20px;
}
</style>


@section('content')

	<div>
		<div class="container">
			<h2 class='manage'>Manage Profiles<h2>
			<table class='table table-bordered'>
				<tr>
					<th>Band Name</th>
					<th>Band eMail</th>
					<th>Genre</th>
					<th>About the Band</th>
					<th>Edit Band</th>
					<th>Remove Band</th>
				</tr>
				@foreach($users as $user)
				<tr>
					<td><a href="#" data-toggle="modal" data-target="">{{ $user->band_name }}</a>

					{{-- DISPLAY MODAL --}}
    
				     
				    
				    {{-- END DISPLAY MODAL --}}

					</td>
					<td>{{ $user->email }}</td>
					<td>{{ $user->genre }}</td>
					<td>{{ $user->about }}</td>

					<td><btn class="btn btn-warning" data-toggle="modal" data-target="#editModal{{ $user->id }}">Edit</btn>

					{{-- EDIT MODAL --}}
    
				      <div class="modal fade" id="editModal{{ $user->id }}" tabindex="-1" role="dialog" aria-labelledby="editModalLabel{{ $user->id }}">
				        <div class="modal-dialog" role="document">
				          <div class="modal-content">
				            <div class="modal-header">
				              <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
				              <div class="modal-title showmodal" id="editModalLabel{{ $user->id }}">
				              	<img src="{{ $user->img }}" width="100%"></div>
				            </div>
				            <div class="modal-body">
				              <div>
						        <h1 class="create">Edit Your Profile</h1>

						        {{ Form::model($user, array('action' => array('UsersController@update', $user->id), 'files'=>true, 'class' => 'horizontal', 'method' => 'PUT')) }}
						            <div class="form-group">
						                {{ Form::label('band_name', 'Band Name') }}
						                {{ Form::text('band_name', Input::old('band_name'), ['class' => 'form-control']) }}
						            </div>

						            <div class="form-group">
						                {{ Form::label('email', 'Band eMail') }}
						                {{ Form::email('email', Input::old('email'), ['class' => 'form-control']) }}
						            </div>

						            <div class="form-group">
						                {{ Form::label('genre', 'Genre') }}
						                {{ Form::text('genre', Input::old('genre'), ['class' => 'form-control']) }}
						            </div>

						            

						            <div class="form-group">
						                {{ Form::label('about', 'About the Band') }}
						                {{ Form::textarea('about', Input::old('about'), ['class' => 'form-control']) }}
						            </div>

						            

						            

						            <div class="form-group">
						                {{-- <div class="col-md-6"> --}}
						                {{ Form::label('img', 'Change Band Photo') }}
						                    <div class="input-group">
						                        <span class="input-group-btn">
						                            <span class="btn btn-info btn-file">Browse 
						                            {{ Form::file('img') }}
						                            </span>
						                        </span>
						                        {{ Form::text('img', null, ['class' => 'form-control', 'readonly']) }}
						                    </div>
						                {{-- </div> --}}
						            </div>
						      
						            <button class="btn btn-warning">Save Changes</button><button type="button" class="btn btn-danger pull-right" data-dismiss="modal">Nevermind</button>
						        {{ Form::close() }}
						      </div>
				            {{-- <div class="modal-footer">
			                    <button type="button" class="btn btn-default" data-dismiss="modal">Close</button> 
			                </div> --}}
				          </div>
				        </div>
				      </div>
				    
				    {{-- END EDIT MODAL --}}
				    </td>
					<td><btn class="btn btn-danger" data-toggle="modal" data-target="">Delete</btn></td>
				</tr>
				@endforeach
			</table>
		</div>
	</div>

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