<?php namespace Acme\Services;

use Acme\Validators\UserValidator;
use Acme\Validators\ValidationException;
use User;

class UserCreatorService {

	protected $validator;

	public function __construct(UserValidator $validator)
	{
		$this->validator = $validator;
	}

	public function make(array $attributes)
	{
		if($this->validator->isValid($attributes))
		{
			User::create([
				'username'	=> $attributes['username'],
				'email'		=> $attributes['email'],
				'password'	=> $attributes['password']
			]);
			return true;
		}
		throw new ValidationException('User validation failed', $this->validator->getErrors());
	}

}
