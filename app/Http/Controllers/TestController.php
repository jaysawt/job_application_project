<?php

namespace App\Http\Controllers;

use App\Models\Test;
use App\Models\Score;
use App\Models\Question;
use App\Models\TestQuestion;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;

class TestController extends Controller
{
    public function questions($id, $user_id){

        $data = Test::where("role_id",$id)
         ->with("testquestions", function($query) {
            return $query->with("questions");
         })
         ->first();
        $test_id = $data['id'];
        $heading = $data['test_name'];
        $details = $data['testquestions'];
        return view('test.question_answers', compact('heading', 'details','user_id', 'test_id'));
    }

    public function answers(Request $request, $user_id, $test_id){
        $data = $request->all();
        $total_questions = count($data) - 1;
        $correct_answers = 0;
        foreach($data as $key=>$value){
            $question  = new Question();
            $correct = $question->checkAnswer($key,$value) ;
            if($correct){
                $correct_answers++;
            }
        }

        $score = new Score;
        $score->user_id = $user_id;
        $score->test_id = $test_id;
        $score->score = $correct_answers;
        $score->total = $total_questions;
        $score->save();
        
        return view('test.submitted', compact('correct_answers', 'total_questions'));
    }
}
