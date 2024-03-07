<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class TestSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table("tests")->insert([ 
            'test_name' => 'Project Assistant Test(true or false)',
            'role_id' => '1',
            'created_at'=>now(),
            'updated_at'=>now(),
        ]);

        DB::table("tests")->insert([ 
            'test_name' => 'Project Lead Test(true or false)',
            'role_id' => '2',
            'created_at'=>now(),
            'updated_at'=>now(),
        ]);

        DB::table("tests")->insert([ 
            'test_name' => 'Project Head Test(true or false)',
            'role_id' => '3',
            'created_at'=>now(),
            'updated_at'=>now(),
        ]);
    }
}
