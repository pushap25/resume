<?php

use Illuminate\Database\Seeder;

class ProjectSkillTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('project_skill')->insert([
            [
                'project_id' => 1,
                'skill_id' => 4
            ],
            [
                'project_id' => 1,
                'skill_id' => 5
            ],
            [
                'project_id' => 1,
                'skill_id' => 2
            ],
            [
                'project_id' => 1,
                'skill_id' => 8
            ],
            [
                'project_id' => 2,
                'skill_id' => 2
            ],
            [
                'project_id' => 2,
                'skill_id' => 6
            ],
            [
                'project_id' => 2,
                'skill_id' => 7
            ],
            [
                'project_id' => 2,
                'skill_id' => 10
            ],
            [
                'project_id' => 2,
                'skill_id' => 11
            ],
            [
                'project_id' => 3,
                'skill_id' => 3
            ],
            [
                'project_id' => 4,
                'skill_id' => 8
            ],
            [
                'project_id' => 5,
                'skill_id' => 2
            ],
            [
                'project_id' => 5,
                'skill_id' => 3
            ],
            [
                'project_id' => 6,
                'skill_id' => 8
            ],
            [
                'project_id' => 7,
                'skill_id' => 1
            ],
            [
                'project_id' => 7,
                'skill_id' => 6
            ],
            [
                'project_id' => 7,
                'skill_id' => 7
            ],
            [
                'project_id' => 7,
                'skill_id' => 10
            ],
            [
                'project_id' => 7,
                'skill_id' => 11
            ]
        ]);
    }
}
