@extends('layouts.default')
@section('content')
<a href="#" class="navbar-brand"><i class="glyphicon glyphicon-home"></i></a>
@stop
@section('sectionz')
<h1> All Users </h1>
	@if ($users->count())
		@foreach ($users as $user)
			<li>{{link_to("/users/{$user->username}",$user->username)}}</li>
		@endforeach
	@else
		<p>Unfortunately, There are no  users.</p>
	@endif
@stop
