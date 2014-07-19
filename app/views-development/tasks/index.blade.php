@extends('layouts.master')

@section('content')
	<div class="col-md-6">
		<h1>All Users</h1>
		<ul class="list-group">
			@foreach($users as $user)
				<li>{{ $user }}</li>
			@endforeach
		</ul>
	</div>
@stop
