<h1>Actualizar un usuario</h1>

{{ Form::open() }}
	Username: {{ Form::text('username', $user->username) }} <br/>
	Email: {{ Form::text('email', $user->email) }} <br/>
	Password: {{ Form::password('password') }} <br/>
	
	{{ Form::submit('Actualizar usuario') }}
{{ Form::close() }}
