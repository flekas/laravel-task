@extends('layouts.master')

@section('content')
	<div class="col-md-6">
		<h1>All Users</h1>
		<ul class="list-group">
			@foreach($tasks as $task)
				<li class="list-group-item {{ $task->completed ? 'completed' : 'uncompleted' }}">
					<a href="/{{ $task->user->username }}/tasks">{{ gravatar_tag($task->user->email) }}</a>
					{{ $task->title }}

					{{ Form::model($task, ['id' => 'task-update-form', 'method' => 'PATCH', 'route' => ['tasks.update', $task->id]]) }}
						{{ Form::checkbox('completed') }}
						{{ Form::submit('Update!') }}
					{{ Form::close() }}
				</li>
			@endforeach
		</ul>
	</div>
	@if(isset($users))
		<div class="col-md-6">
			<h3>Add New Task</h3>
			@include('tasks/partials/_form')
		</div>
	@endif
@stop
