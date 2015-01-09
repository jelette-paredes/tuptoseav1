
@extends('layouts.default')
@section('content')
<a href="#" class="navbar-brand"><i class="glyphicon glyphicon-home"></i></a>
@stop
@section('sectionz')
<h1>Create New user</h1>
{{ Form::open(array('route' => 'users.store', 'class'=>'form-signin')) }}
	<div>
		{{ Form::label('username', 'Username: ') }}
		{{ Form::text('username') }}
		{{ $errors->first('username','<span class=error>:message</span>') }}
	</div>
	<div>
		{{ Form::label('email', 'Email: ') }}
		{{ Form::email('email', null, array('class'=>'form-control', 'placeholder'=>'Email')) }}
		{{ $errors->first('email','<span class=error>:message</span>') }}
	</div>
	<div>
		{{ Form::label('password', 'Password: ') }}
		{{ Form::password('password', array('class'=>'form-control', 'placeholder'=>'Password')) }}
		{{ $errors->first('password','<span class=error>:message</span>') }}
	</div>
	<div>
		{{ Form::label('confirm_password', 'Confirmation: ') }}
		{{ Form::password('confirm_password', array('class'=>'form-control', 'placeholder'=>'Re-Enter Password')) }}
		{{ $errors->first('confirm_password','<span class=error>:message</span>') }}
	</div>
	<div>
		{{ Form::submit('Create User') }}
	</div>
{{ Form::close() }}
@stop