@extends('layouts.master')

@section('content')
	<div class="col-md-6">
		<h1>All Users</h1>
		<ul class="list-group">
			@foreach($tasks as $task)
				<li class="list-group-item {{ $task->completed ? 'completed' : 'uncompleted' }}">
					<a href="/{{ $task->user->username }}/tasks">{{ gravatar_tag($task->user->email) }}</a>
					{{ $task->title }}
				</li>
			@endforeach
		</ul>
	</div>
@stop
