<?php

use Illuminate\Database\Seeder;

class GalleryContentTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('gallerycontent')->insert([
        	[
        		'parent_id'		=> 1,
	            'images' 		=> '/upload/deoghar/Deoghar Trip/DSCN0390.JPG',
	            'videos'	 	=> NULL
	        ]
        ]);
    }
}
