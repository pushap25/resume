<?php

use Illuminate\Database\Seeder;

class SkillsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('skills')->insert([
        	[
	            'name' => 'Laravel',
	            'description' => 'This website is developed using Laravel.',
	        ],
        	[
	            'title' => 'PHP',
	            'description' => 'The previous version of this website was developed using php.',
	        ],
        	[
	            'name' => 'Unity 3D',
	            'description' => 'Build a few projects on Unity 3D.',
	        ],
        	[
	            'title' => 'Python',
	            'description' => 'My very own JARVIS was developed using this proramming language. Its the easiest one and the most fun language I have worked on.',
	        ],
        	[
	            'name' => 'Machine Learning',
	            'description' => 'I have not yet worked on the core algorithms of ML but have used few of its methods while working on my JARVIS project.',
	        ],
        	[
	            'title' => 'HTML5 & CSS3',
	            'description' => 'The most used languages for front end development.Being a full stack developer I love to develop the front end on my own. So I love working with these programming languages too.',
	        ],
        	[
	            'name' => 'JavaScript',
	            'description' => 'I have used these in all of my web based projects.',
	        ],
        	[
	            'title' => 'IOT',
	            'description' => 'Most of my projects are IOT based projects. This technology is fun to work in. I love to build stuff using IOT based sensors and stuff.',
	        ],
        	[
	            'title' => 'C , C++ & JAVA',
	            'description' => 'These are the programming language I started my programming journey with. C was the very first programming language I learn\'t in college. I have built tons of small projects using these languages. May that be for fun or helping out my friends.',
	        ],
        	[
	            'name' => 'jQuery',
	            'description' => 'I have used these in all of my web based projects.',
	        ],
        	[
	            'name' => 'AJAX',
	            'description' => 'I have used these in all of my web based projects.',
	        ]
        ]);
    }
}
