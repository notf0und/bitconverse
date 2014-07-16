<h1>Users</h1>
@if(count($users) > 0)
	<ul>
		@foreach($users as $user)
			<li>
				{{ $user->username }} - {{ $user->email }} - {{ HTML::link('users/delete/'.$user->id, 'Borrar') }} - {{ HTML::link('users/update/'.$user->id, 'Actualizar') }}
			</li>
		@endforeach
	</ul>
@else
	Todavía no hay ningún usuario registrado.
@endif

{{ HTML::link('users/create', 'Crear un nuevo usuario') }}
