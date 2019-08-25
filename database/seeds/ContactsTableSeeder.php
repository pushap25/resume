<?php

use Illuminate\Database\Seeder;

class ContactsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('contacts')->insert([
        	[
	            'name' => 'Pushap Saini',
	            'email' => 'sainipushapal@gmail.com',
	            'subject' => 'Testing',
	            'message' => 'This is a Test'
	        ],
        	[
	            'name' => 'Pushap Saini',
	            'email' => 'saini.ubuntu@gmail.com',
	            'subject' => 'Testing',
	            'message' => 'This is a Test'
	        ]
        ]);
    }
}
