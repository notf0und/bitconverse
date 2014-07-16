{{ Form::open() }}
	Username: {{ Form::text('username', Input::old('username')) }} <br/>
	Password: {{ Form::password('password') }} <br/>
	{{ Form::submit('Login') }}
{{ Form::close() }}
