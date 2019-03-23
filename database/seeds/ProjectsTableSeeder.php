<?php

use Illuminate\Database\Seeder;

class ProjectsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('projects')->insert([
        	[
	            'title' => 'AI Based Personal Assistant',
	            'description' => 'Project includes building an Artificial Intelligence based Smart Assistant for controlling different electronic appliances and getting things done just by communicating. It includes a language processing system to understand user commands and process accordingly. Also it includes access to various google services using google free APIs which also helps the user to gain access to their emails. Moreover its language processing system detects multiple entities like date/time, weather information even set reminders and many more. It also consists of its own GUI for windows as well as Linux systems to communicate with the assistant. Also it has an Android App to communicate and get things done. Further it uses Node MCU module to communicate with different electronic appliances around the house.',
	            'time_taken'=>'4 Months',
	            'images' => '',
	            'videos' => '',
	            'links' => '',
	        ],
        	[
	            'title' => 'LiveDisqus',
	            'description' => 'Project includes development of a fully functional dynamic website for students of our university with dashboard feature which assists them in their academics and prepares them for their placements.',
	            'time_taken'=>'3 Months',
	            'images' => '',
	            'videos' => '',
	            'links' => serialize(array('livedisqus.in')),
	        ],
        	[
	            'title' => 'Augmented Reality Based Human Assistant',
	            'description' => 'Project includes development of augmented reality based human assistant which can perform some simple to advanced computations with features like college ID card detection, Text recognition, smart image search.',
	            'time_taken'=>'5 Months',
	            'images' => '',
	            'videos' => '',
	            'links' => '',
	        ],
        	[
	            'title' => 'Automobile Monitoring Tool',
	            'description' => 'Project includes development of a UI based system to monitor vehicles remotely with collision detection system and V2V (vehicle to vehicle) communication system. ',
	            'time_taken'=>'5 Months',
	            'images' => '',
	            'videos' => '',
	            'links' => '',
	        ],
        	[
	            'title' => 'Language Learning System',
	            'description' => 'Project includes building a prototype (Desktop App) of a language learning system which is capable of detecting an object and providing a short description about the object in multiple languages by making use of open source APIs.',
	            'time_taken'=>'2 Months',
	            'images' => '',
	            'videos' => '',
	            'links' => '',
	        ],
        	[
	            'title' => 'Lifi based smart homes ',
	            'description' => 'Proposed model is the integration of Lifi technology with IOT to create a smart home automation system.<br>Capable of -<br>(I) Remote Management (turning on/off electric appliances from anywhere).<br>(II) Intrusion Detection.<br>(III) Safety Control etc.',
	            'time_taken'=>'2 Months',
	            'images' => '',
	            'videos' => '',
	            'links' => '',
	        ],
        	[
	            'title' => 'Portfolio Website',
	            'description' => 'This very own website is a brief summary of all my Projects, Technologies and Experiences I have gone through in my career.',
	            'time_taken'=>'1 Month',
	            'images' => '',
	            'videos' => '',
	            'links' => serialize(array('pushapsaini.com')),
	        ],
	    ]);
    }
}
