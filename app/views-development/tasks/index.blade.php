@extends('layouts.master')

@section('content')
	<h1>All Users</h1>
	<ul>
		@foreach($users as $user)
			<li>{{ $user }}</li>
		@endforeach
	</ul>
@stop
