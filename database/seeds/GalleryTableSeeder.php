<?php

use Illuminate\Database\Seeder;

class GalleryTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('gallery')->insert([
        	[
        		'user_id'		=> 1,
	            'title' 		=> 'Deoghar Trip',
	            'description' 	=> 'This was my first ever trip with my Kolkata Flatmates.'
	        ]
        ]);
    }
}
