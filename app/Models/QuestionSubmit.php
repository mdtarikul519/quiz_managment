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
    public function users_reations()
    {
        return $this->hasMany(User::class,'id','user_id');
    }
}  
