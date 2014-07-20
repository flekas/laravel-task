<?php namespace Acme\Services;

use Acme\Validators\TaskValidator;
use Acme\Validators\ValidationException;
use Task;

class TaskCreatorService {

	protected $validator;

	public function __construct(TaskValidator $validator)
	{
		$this->validator = $validator;
	}

	public function make(array $attributes)
	{
		if($this->validator->isValid($attributes))
		{
			Task::create([
				'title'		=> $attributes['title'],
				'body'		=> $attributes['body'],
				'user_id'	=> $attributes['assign']
			]);
			return true;
		}
		throw new ValidationException('Task validation failed', $this->validator->getErrors());
	}

}
