<?php

namespace Database\Seeders;

use App\Models\Quiz_question_submissions;
use Illuminate\Database\Seeder;

class Quiz_question_submissionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Quiz_question_submissions::truncate();
        Quiz_question_submissions::create([
            'user_id'=>'2',
            'quiz_id' => '1',
            'question_id' => '1',
            'option_id' => '1',
            'is_correct' => '1'
        ]);
        Quiz_question_submissions::create([
            'user_id'=>'2',
            'quiz_id' => '1',
            'question_id' => '1',
            'option_id' => '2',
            'is_correct' => '0'
        ]);
        Quiz_question_submissions::create([
            'user_id'=>'2',
            'quiz_id' => '1',
            'question_id' => '1',
            'option_id' => '3',
            'is_correct' => '1'
        ]);
        Quiz_question_submissions::create([
            'user_id'=>'2',
            'quiz_id' => '1',
            'question_id' => '1',
            'option_id' => '4',
            'is_correct' => '0'
        ]);
    





        Quiz_question_submissions::create([
        'user_id'=>'2',
        'quiz_id' => '1',
        'question_id' => '2',
        'option_id' => '5',
        'is_correct' => '1'
    ]);
    Quiz_question_submissions::create([
        'user_id'=>'2',
        'quiz_id' => '1',
        'question_id' => '2',
        'option_id' => '6',
        'is_correct' => '1'
    ]);
    Quiz_question_submissions::create([
        'user_id'=>'2',
        'quiz_id' => '1',
        'question_id' => '2',
        'option_id' => '7',
        'is_correct' => '0'
    ]);
    Quiz_question_submissions::create([
        'user_id'=>'2',
        'quiz_id' => '1',
        'question_id' => '2',
        'option_id' => '8',
        'is_correct' => '1'
    ]);


    
    Quiz_question_submissions::create([
        'user_id'=>'2',
        'quiz_id' => '1',
        'question_id' => '3',
        'option_id' => '9',
        'is_correct' => '1'
    ]);
    Quiz_question_submissions::create([
        'user_id'=>'2',
        'quiz_id' => '1',
        'question_id' => '3',
        'option_id' => '10',
        'is_correct' => '0'
    ]);
    Quiz_question_submissions::create([
        'user_id'=>'2',
        'quiz_id' => '1',
        'question_id' => '3',
        'option_id' => '11',
        'is_correct' => '1'
    ]);
    Quiz_question_submissions::create([
        'user_id'=>'2',
        'quiz_id' => '1',
        'question_id' => '3',
        'option_id' => '12',
        'is_correct' => '0'
    ]);
   
    }
}
