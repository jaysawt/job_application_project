<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TestQuestion extends Model
{
    protected $table = 'test_questions';

    public function tests(){
        return $this->belongsTo(Test::class);
    }
    public function questions(){
        return $this->hasOne(Question::class,'id','question_id');
    }
}
