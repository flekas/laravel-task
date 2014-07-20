<?php namespace Acme\Validators;

class UserValidator extends Validator {

	protected static $rules = [
		'username'	=> 'required|unique:users',
		'email'		=> 'required|unique:users|email',
		'password'	=> 'required'
	];

}
