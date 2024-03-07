<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class QuestionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //
        DB::table("questions")->insert([ 
            'question_title' => 'A Gantt chart is indeed a type of bar chart that illustrates a project schedule.',
            'question_type' => 'boolean',
            'answer' => 'true',
            'created_at'=>now(),
            'updated_at'=>now(),
        ]);

        DB::table("questions")->insert([ 
            'question_title' => 'Risk management involves identifying, assessing, and managing risks, not eliminating them entirely.',
            'question_type' => 'boolean',
            'answer' => 'false',
            'created_at'=>now(),
            'updated_at'=>now(),
        ]);

        DB::table("questions")->insert([ 
            'question_title' => 'The Work Breakdown Structure (WBS) does account for task dependencies and is not a linear representation of project tasks.',
            'question_type' => 'boolean',
            'answer' => 'false',
            'created_at'=>now(),
            'updated_at'=>now(),
        ]);

        DB::table("questions")->insert([ 
            'question_title' => 'The Critical Path Method (CPM) is a project management technique used to determine the longest sequence of dependent tasks and ensure that a project is completed as quickly as possible.',
            'question_type' => 'boolean',
            'answer' => 'true',
            'created_at'=>now(),
            'updated_at'=>now(),
        ]);

        DB::table("questions")->insert([ 
            'question_title' => 'Project charters are essential documents in project management, formally authorizing the existence of a project and providing the project manager with authority and resources.',
            'question_type' => 'boolean',
            'answer' => 'false',
            'created_at'=>now(),
            'updated_at'=>now(),
        ]);

        DB::table("questions")->insert([ 
            'question_title' => 'Agile project management methodologies do prioritize adaptive planning, evolutionary development, early delivery, and continuous improvement..',
            'question_type' => 'boolean',
            'answer' => 'true',
            'created_at'=>now(),
            'updated_at'=>now(),
        ]);

        DB::table("questions")->insert([ 
            'question_title' => 'Project milestones mark significant events or stages in a project and are essential for project monitoring and control.',
            'question_type' => 'boolean',
            'answer' => 'false',
            'created_at'=>now(),
            'updated_at'=>now(),
        ]);

        DB::table("questions")->insert([ 
            'question_title' => 'Risk management does involve identifying, assessing, and prioritizing risks followed by coordinated efforts to minimize, monitor, and control the probability and impact of unfortunate events.',
            'question_type' => 'boolean',
            'answer' => 'true',
            'created_at'=>now(),
            'updated_at'=>now(),
        ]);


        DB::table("questions")->insert([ 
            'question_title' => 'A project milestone does mark a significant event or stage in a project, such as the completion of a major deliverable.',
            'question_type' => 'boolean',
            'answer' => 'true',
            'created_at'=>now(),
            'updated_at'=>now(),
        ]);

        DB::table("questions")->insert([ 
            'question_title' => 'Gantt charts can be updated and adjusted throughout the project lifecycle to reflect changes in project tasks and schedules.',
            'question_type' => 'boolean',
            'answer' => 'false',
            'created_at'=>now(),
            'updated_at'=>now(),
        ]);
    }
}
