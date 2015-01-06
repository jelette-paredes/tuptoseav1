
@extends('layouts.default')
@section('content')
<a href="#" class="navbar-brand"><i class="glyphicon glyphicon-home"></i></a>
@stop
@section('sectionz')
<h1>Log In</h1>
{{ Form::open(['route' => 'sessions.store']) }}
	<div>
		{{ Form::label('email', 'Email: ') }}
		{{ Form::email('email') }}
	</div>
	<div>
		{{ Form::label('password', 'Password: ') }}
		{{ Form::password('password') }}
	</div>
	<div>
		{{ Form::submit('Login') }}
	</div>
{{ Form::close() }}
@stop