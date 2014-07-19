<?php

class Task extends Eloquent {

	protected $guarded = ['id'];

	public function user()
	{
		return $this->belongsTo('User');
	}

	public static function byUsername($username)
	{
		return User::byUsername($username)->tasks;
	}
}
