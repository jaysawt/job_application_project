<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class RoleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table("roles")->insert([
            'role_name'=> 'Project Assistant',
            'created_at'=>now(),
            'updated_at'=>now(),
        ]);

        DB::table("roles")->insert([
            'role_name'=> 'Project Lead',
            'created_at'=>now(),
            'updated_at'=>now(),
        ]);

        DB::table("roles")->insert([
            'role_name'=> 'Project Head',
            'created_at'=>now(),
            'updated_at'=>now(),
        ]);
    }
}
