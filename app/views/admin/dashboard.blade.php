@if(Auth::check())
	Te has identificado como {{ Auth::user()->username }}
@else
	No te has identificado {{ HTML::link('login', 'Login') }}
@endif
