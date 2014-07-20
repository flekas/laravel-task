<?php

use Acme\Services\UserCreatorService;
use Acme\Validators\ValidationException;

class UsersController extends \BaseController {

	protected $userCreator;

	public function __construct(UserCreatorService $userCreator)
	{
		$this->userCreator = $userCreator;
	}

	public function index()
	{
		// Fetch all users.
		$users = User::all();

		// Load view.
		return View::make('users.index', compact('users'));
	}

	public function store()
	{
		try
		{
			// Try to create new user.
			$this->userCreator->make(Input::all());
		}
		catch(ValidationException $e)
		{
			// Validation fails, redirect back with errors.
			return Redirect::back()->withInput()->withErrors($e->getErrors());
		}

		// We create new user. Redirect to users.
		return Redirect::to('users');
	}

}
