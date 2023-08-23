<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Quiz_questions_options extends Model
{
    use HasFactory;
    public function question_relation(){
        return $this->hasOne(Quiz_questions::class,'question_id','id');
  }

}
