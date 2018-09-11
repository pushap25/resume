<?php

use Illuminate\Database\Seeder;

class AcademicsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('academics')->insert([
        	[
	            'title' => 'IT Conclave 2016',
	            'description' => 'Secured first position in Project Parliament for best minor project.',
	            'images' => serialize(array('/images/brothers.jpg')),
	            'videos' => '',
	            'links' => '',
	        ],
        	[
	            'title' => 'IBM ICE 2018',
	            'description' => 'Secured best project prize.',
	            'images' => serialize(array('/images/brothers.jpg')),
	            'videos' => '',
	            'links' => '',
	        ],
        	[
	            'title' => 'Publication',
	            'description' => 'Automobile Monitoring Tool, International Journal of Engineering and Computer Science (JAECS) ISSN: 2319-7242 Volume 5 Issue 11 Nov.2016, Page No.19132-19134.',
	            'images' => serialize(array('/images/publication_certificate.jpg')),
	            'videos' => '',
	            'links' => '',
	        ]
        ]);
    }
}
