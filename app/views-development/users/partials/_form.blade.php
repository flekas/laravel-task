{{ Form::open(['url' => '/users', 'class' => 'form']) }}
	<div class="form-group">
		{{ Form::label('username', 'Username: ') }}
		{{ Form::text('username', null, ['class' => 'form-control']) }}
		{{ $errors->first('username', '<span class="error">:message</span>') }}
	</div>
	<div class="form-group">
		{{ Form::label('email', 'Email: ') }}
		{{ Form::text('email', null, ['class' => 'form-control']) }}
		{{ $errors->first('email', '<span class="error">:message</span>') }}
	</div>
	<div class="form-group">
		{{ Form::label('password', 'Password: ') }}
		{{ Form::password('password', ['class' => 'form-control']) }}
		{{ $errors->first('password', '<span class="error">:message</span>') }}
	</div>
	<div class="form-group">
		{{ Form::submit('Create User', ['class' => 'btn btn-primary']) }}
	</div>
{{ Form::close() }}
