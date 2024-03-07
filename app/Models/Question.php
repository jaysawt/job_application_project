<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Question extends Model
{
    protected $table = 'questions';
    public function testquestions(){
        return $this->hasOne(TestQuestion::class);
    }

    public function checkAnswer($id, $answer){
        $question = $this->find($id);
        if($question){
            return $question->answer == $answer;
        }else{
            return false;
        }
    }

}




     