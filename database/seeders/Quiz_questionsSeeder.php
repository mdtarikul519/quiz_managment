<?php

namespace Database\Seeders;

use App\Models\Quiz_questions;
use Illuminate\Database\Seeder;

class Quiz_questionsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Quiz_questions::truncate();
        Quiz_questions::create([   
        'quiz_id' => '1',
        'title' => 'Who is the father of c programing?',
        'marke' =>'1'
    ]);
    Quiz_questions::create([

        'quiz_id' => '1',
        'title' => 'Write a program in C?',
        'marke' =>'1'
     ]);

     Quiz_questions::create([

        'quiz_id' => '1',
        'title' => 'C Program to find sum of array elements.',
        'marke' =>'1'
     ]);






     Quiz_questions::create([

        'quiz_id' => '2',
        'title' => 'Who is the father of c php?',
        'marke' =>'1'
    ]);
    Quiz_questions::create([

        'quiz_id' => '2',
        'title' => 'PHP is Scripting language',
        'marke' =>'1'
    ]);
    Quiz_questions::create([

        'quiz_id' => '2',
        'title' => 'php Program to find sum of array elements.',
        'marke' =>'1'
    ]);




    Quiz_questions::create([

        'quiz_id' => '3',
        'title' => 'Who is the father of java programing?',
        'marke' =>'1'
    ]);

    Quiz_questions::create([

        'quiz_id' => '3',
        'title' => 'what is DML Commands are',
        'marke' =>'1'
    ]);
    Quiz_questions::create([

        'quiz_id' => '3',
        'title' => 'java Program to find sum of array elements.',
        'marke' =>'1'
    ]);
   
    }
}
