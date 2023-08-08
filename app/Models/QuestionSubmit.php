<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class QuestionSubmit extends Model
{
    use HasFactory;
    protected $guarded = [];

    public function question_relation(){
        return $this->belongsTo(Question::class,'question_id');
    } 
}  
