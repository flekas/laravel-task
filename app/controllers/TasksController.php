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
		$tasks = Task::with('user')->orderBy('created_at', 'desc')->get();
		$users = User::lists('username', 'id');

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

}
