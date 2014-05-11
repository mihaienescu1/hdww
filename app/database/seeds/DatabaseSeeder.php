<?php

class DatabaseSeeder extends Seeder {

	/**
	 * Run the database seeds.
	 *
	 * @return void
	 */
	public function run()
	{
		Eloquent::unguard();
	    $this->call('UserTableSeeder');
		
		$this->command->info('User table seeded with some fake data!');
	}

}


class UserTableSeeder extends Seeder {

    public function run()
    {
        DB::table('users')->delete();

        User::create(
				array(
				'first_name' 	=> 'Mihai',
				'last_name' 	=> 'Enescu',
				'about' 		=> 'I am a member in the social democratic party',
				'email' 		=> 'mihu@max.com',
				'password' 	=> Hash::make('pasadena100')
        	)
		);
    }

}
