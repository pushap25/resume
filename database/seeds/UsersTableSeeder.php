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
        DB::table('users')->insert([
        	[
	            'name' => 'Pushap Saini',
	            'email' => 'sainipushapal@gmail.com',
	            'password' => Hash::make('Gmail@123')
	        ]
        ]);
    }
}
