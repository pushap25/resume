<?php

use Illuminate\Database\Seeder;

class WorkexperienceTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('workexperience')->insert([
            [
                'company_name' => 'NR SWITCH -N- RADIO PVT. LTD.',
                'designation' => 'IT Engineer',
                'title' => 'Testing of C-DOT MAX-NG Project (CACU/LAGU)',
                'description' => 'My job involved installation, testing and debugging of CACU (Central Access Control Unit) / LAGU (Logical Access Gateway Unit) systems and providing technical support and solutions for network problems with Red Hat Enterprise Linux Platform.',
                'from' => '2017-05-01',
                'to' => '2017-08-01',
            ],
            [
                'company_name' => 'Singsys Pte Ltd',
                'designation' => 'Software Engineer',
                'title' => '',
                'description' => '',
                'from' => '2018-08-02',
                'to' => null,
            ],
        ]);
    }
}
