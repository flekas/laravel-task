<?php

class UserTasksController extends \BaseController {

	public function index($username)
	{
		$tasks = Task::byUsername($username);
		return View::make('tasks.index', compact('tasks'));
	}
}
