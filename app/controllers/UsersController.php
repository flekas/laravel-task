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
		$users = User::all();

		return View::make('users.index', compact('users'));
	}

	public function store()
	{
		try
		{
			$this->userCreator->make(Input::all());
		}
		catch(ValidationException $e)
		{
			return Redirect::back()->withInput()->withErrors($e->getErrors());
		}

		return Redirect::to('users');
	}

}
