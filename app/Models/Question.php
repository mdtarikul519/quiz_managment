<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Question extends Model
{
    use HasFactory;
    protected $guarded = [];

          public function quiz_relation(){
                return $this->belongsTo(Quiz::class,'quiz_id');
          }

          public function submission(){
            return $this->hasOne(QuestionSubmit::class,'question_id','id');
      }
  


     
}
