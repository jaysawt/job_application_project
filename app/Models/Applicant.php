<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Applicant extends Model
{
    use HasFactory;

    public function educations(){
        return $this->hasMany(Education::class);
    }

    public function employements(){
        return $this->hasMany(Employement::class);
    }
    

}
