<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class TestQuestionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table("test_questions")->insert([ 
            'test_id' => '1',
            'question_id' => '1',
            'created_at'=>now(),
            'updated_at'=>now(),
        ]);

        DB::table("test_questions")->insert([ 
            'test_id' => '1',
            'question_id' => '2',
            'created_at'=>now(),
            'updated_at'=>now(),
        ]);

        DB::table("test_questions")->insert([ 
            'test_id' => '1',
            'question_id' => '3',
            'created_at'=>now(),
            'updated_at'=>now(),
        ]);

        DB::table("test_questions")->insert([ 
            'test_id' => '1',
            'question_id' => '4',
            'created_at'=>now(),
            'updated_at'=>now(),
        ]);

        DB::table("test_questions")->insert([ 
            'test_id' => '1',
            'question_id' => '5',
            'created_at'=>now(),
            'updated_at'=>now(),
        ]);

        DB::table("test_questions")->insert([ 
            'test_id' => '1',
            'question_id' => '6',
            'created_at'=>now(),
            'updated_at'=>now(),
        ]);

        DB::table("test_questions")->insert([ 
            'test_id' => '1',
            'question_id' => '7',
            'created_at'=>now(),
            'updated_at'=>now(),
        ]);

        DB::table("test_questions")->insert([ 
            'test_id' => '1',
            'question_id' => '8',
            'created_at'=>now(),
            'updated_at'=>now(),
        ]);

        DB::table("test_questions")->insert([ 
            'test_id' => '1',
            'question_id' => '9',
            'created_at'=>now(),
            'updated_at'=>now(),
        ]);

        DB::table("test_questions")->insert([ 
            'test_id' => '1',
            'question_id' => '10',
            'created_at'=>now(),
            'updated_at'=>now(),
        ]);
    }
}
