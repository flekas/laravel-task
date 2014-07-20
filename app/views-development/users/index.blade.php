@extends('layouts.master')

@section('content')
	<div class="col-md-6">
		<h1>All Users</h1>
		<ul class="list-group">
			@foreach($users as $user)
				<li class="list-group-item">
					{{ $user->username }}
				</li>
			@endforeach
		</ul>
	</div>
@stop
