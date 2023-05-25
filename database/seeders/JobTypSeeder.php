<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class JobTypSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $job_types = array(
            array('id' => '1','type_name' => 'full time'),
            array('id' => '2','type_name' => 'part time')
          );
          DB::table('job_types')->insert($job_types);

    }
}
