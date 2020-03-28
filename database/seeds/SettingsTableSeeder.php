<?php

use Illuminate\Database\Seeder;

class SettingsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('settings')->insert([
        	[
        		'name'		=> 'cover_image',
	            'value' 	=> 'images\gallery_pic.png'
	        ],
        	[
        		'name'		=> 'profile_pic',
	            'value' 	=> 'images\profile_pic.png'
	        ]
        ]);
    }
}
