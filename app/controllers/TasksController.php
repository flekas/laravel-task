<?php

use Acme\Services\TaskCreatorService;
use Acme\Validators\ValidationException;

class TasksController extends BaseController {

	protected $taskCreator;

	public function __construct(TaskCreatorService $taskCreator)
	{
		$this->taskCreator = $taskCreator;
	}

	public function index()
	{
		$users = User::lists('username', 'id');
		foreach($users as $key => $user)
		{
			$tasks[] = Task::with('user')->whereUser_id($key)->orderBy('created_at', 'desc')->limit(3)->get();
		}

		return View::make('tasks.index', compact('tasks', 'users'));
	}

	public function store()
	{
		try
		{
			$this->taskCreator->make(Input::all());
		}
		catch(ValidationException $e)
		{
			return Redirect::back()->withInput()->withErrors($e->getErrors());
		}

		return Redirect::home();
	}

	public function update($id)
	{
		$task = Task::findOrFail($id);
		$task->completed = Input::get('completed') ?: 0;
		$task->save();

		return Redirect::back();
	}

	public function delete($id)
	{
		$task = Task::findOrFail($id);
		$task->delete();

		return Redirect::back();
	}

}
