<?php

use Acme\Services\TaskCreatorService;
use Acme\Validators\ValidationException;

class TasksController extends BaseController {

	protected $taskCreator;

	/*
	 * __construct
	 * @var $taskCreator obj
	 */
	public function __construct(TaskCreatorService $taskCreator)
	{
		$this->taskCreator = $taskCreator;
	}

	public function index()
	{
		// Fetch users as array. [id => username]
		$users = User::lists('username', 'id');
		foreach($users as $key => $user)
		{
			// Limit and separate results for each users.
			$tasks[] = Task::with('user')->whereUser_id($key)->orderBy('created_at', 'desc')->limit(3)->get();
		}

		// Load view.
		return View::make('tasks.index', compact('tasks', 'users'));
	}

	public function store()
	{
		try
		{
			// Try to make new task.
			$this->taskCreator->make(Input::all());
		}
		catch(ValidationException $e)
		{
			// Task creating was faild, redirect back with exceptions.
			return Redirect::back()->withInput()->withErrors($e->getErrors());
		}

		// Everithing ok, redirect to task.
		return Redirect::to('tasks');
	}

	public function update($id)
	{
		// Query fot task.
		$task = Task::findOrFail($id);
		// Is input 'completer' was checked.
		$task->completed = Input::get('completed') ?: 0;
		// Update task.
		$task->save();

		// Redirect back.
		return Redirect::back();
	}

	public function delete($id)
	{
		// Query for task.
		$task = Task::findOrFail($id);
		// We find one, and delete.
		$task->delete();

		// Redirect back.
		return Redirect::back();
	}

}
