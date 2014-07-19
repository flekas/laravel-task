<?php

// Composer: "fzaninotto/faker": "v1.4.0"
use Faker\Factory as Faker;

class UsersTableSeeder extends Seeder {

	public function run()
	{
		User::truncate();
		User::create([
			'username'	=> 'Bojan',
			'email'		=> 'bbojan1983@gmail.com',
			'password'	=> '1234'
		]);

		User::create([
			'username'	=> 'Pera',
			'email'		=> 'pera@pera.com',
			'password'	=> '1234'
		]);
	}

}
