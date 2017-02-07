<?php

use Illuminate\Database\Seeder;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $data = array(
            [
                'name' 		=> 'Hector Galindez',
                'email' 	=> 'hectorgalindez02@gmail.com',
                'password' 	=> \Hash::make('123456'),
                'created_at'=> new DateTime,
                'updated_at'=> new DateTime
            ]
        );
    }
}
