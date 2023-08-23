<?php

namespace Database\Seeders;

use App\Models\Quiz_questions_options;
use Illuminate\Database\Seeder;

class Quiz_question_optionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Quiz_questions_options::truncate();
        Quiz_questions_options::create([
            'quiz_id' => '1',
            'question_id' => '1',
            'title' => 'Dennis Ritchie',
            'is_correct' => '0'
        ]);
        Quiz_questions_options::create([
            'quiz_id' => '1',
            'question_id' => '1',
            'title' => 'Messi',
            'is_correct' => '1'
        ]);
        Quiz_questions_options::create([
            'quiz_id' => '1',
            'question_id' => '1',
            'title' => 'Debala',
            'is_correct' => '1'
        ]);
        Quiz_questions_options::create([
            'quiz_id' => '1',
            'question_id' => '1',
            'title' => 'Demaria',
            'is_correct' => '0'
        ]);
    





    Quiz_questions_options::create([
        'quiz_id' => '1',
        'question_id' => '2',
        'title' => 'return 0',
        'is_correct' => '1'
    ]);
    Quiz_questions_options::create([
        'quiz_id' => '1',
        'question_id' => '2',
        'title' => '#include <stdio.h>',
        'is_correct' => '1'
    ]);
    Quiz_questions_options::create([
        'quiz_id' => '1',
        'question_id' => '2',
        'title' => 'int main(){',
        'is_correct' => '0'
    ]);
    Quiz_questions_options::create([
        'quiz_id' => '1',
        'question_id' => '2',
        'title' => '}',
        'is_correct' => '0'
    ]);


    
    Quiz_questions_options::create([
        'quiz_id' => '1',
        'question_id' => '3',
        'title' => '10',
        'is_correct' => '1'
    ]);
    Quiz_questions_options::create([
        'quiz_id' => '1',
        'question_id' => '3',
        'title' => '12',
        'is_correct' => '1'
    ]);
    Quiz_questions_options::create([
        'quiz_id' => '1',
        'question_id' => '3',
        'title' => '4',
        'is_correct' => '1'
    ]);
    Quiz_questions_options::create([
        'quiz_id' => '1',
        'question_id' => '3',
        'title' => '7',
        'is_correct' => '0'
    ]);
   }
}
