<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $this->call([
        	// UsersTableSeeder::class,
        	// SkillsTableSeeder::class,
        	// ProjectsTableSeeder::class,
        	// ProjectSkillTableSeeder::class,
        	// ContactsTableSeeder::class,
         //    AcademicsTableSeeder::class,
         //    WorkexperienceTableSeeder::class,
         //    GalleryTableSeeder::class,
         //    GalleryContentTableSeeder::class,
            SettingsTableSeeder::class
        ]);
    }
}
