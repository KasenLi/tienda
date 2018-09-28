<?php

use Illuminate\Database\Seeder;
use App\User;

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
        		'name'		=>	'Kasen',
        		'last_name'	=>	'Li',
        		'email'		=>	'kasenkelvin.10@gmail.com',
        		'username'	=>	'kelvin',
        		'password'	=>	\Hash::make('123456'),
        		'type'		=>	'admin',
        		'active'	=>	1,
        		'address'	=>	'Calle 13',
        		'created_at'=>	new DateTime,
        		'updated_at'=>	new DateTime
        	],
        	[
        		'name'		=>	'Jennie',
        		'last_name'	=>	'Kim',
        		'email'		=>	'jk@example.com',
        		'username'	=>	'jennie',
        		'password'	=>	\Hash::make('123456'),
        		'type'		=>	'user',
        		'active'	=>	1,
        		'address'	=>	'Seul',
        		'created_at'=>	new DateTime,
        		'updated_at'=>	new DateTime
        	]
        );

        User::insert($data);
    }
}
