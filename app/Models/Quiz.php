<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Quiz extends Model   
{
    use HasFactory;

    public function class_relation()
    {

        return $this->belongsTo(Classes::class, 'class_id');
    }



    public function quizall_question()
    {
        return $this->hasMany(Question::class,'quiz_id','id');
    }

    public function total_examiner()
    {
        return $this->hasOne(QuestionSubmit::class,'id');
    }

    
}

    

