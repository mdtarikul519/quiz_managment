<?php

namespace Database\Seeders;

use App\Models\Question;
use Illuminate\Database\Seeder;

class QuestionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Question::truncate();
        Question::create([

            'quiz_id' => '1',
            'question_name' => 'Who is the father of PHP?',
            'optionA' => 'Drek Kolkevi',
            'optionB' => 'Rasmus Lerdorf',
            'optionc' => 'Willam Makepiece',
            'optionD' => 'List Barely',
            'answer' => 'Rasmus Lerdorf',
        ]);
        Question::create([

            'quiz_id' => '1',
            'question_name' => 'What is used to make hummus?',
            'optionA' => 'Drek',
            'optionB' => 'Chickpeas',
            'optionc' => 'Makepiece',
            'optionD' => ' Barely',
            'answer' => 'Chickpeas',
         ]);

         Question::create([

            'quiz_id' => '1',
            'question_name' => 'What is your name?',
            'optionA' => 'tarek',
            'optionB' => 'shorif',
            'optionc' => 'joton',
            'optionD' => ' sajid',
            'answer' => 'tarek',
         ]);
        Question::create([

            'quiz_id' => '2',
            'question_name' => 'PHP is Scripting language',
            'optionA' => 'Browser Side',
            'optionB' => 'Server Side',
            'optionc' => 'Home Side',
            'optionD' => 'Client Side',
            'answer' => 'Server Side',
        ]);
        Question::create([

            'quiz_id' => '3',
            'question_name' => 'what is DML Commands are',
            'optionA' => 'Alter',
            'optionB' => 'Update',
            'optionc' => 'Select',
            'optionD' => 'Add',
            'answer' => 'Select',
        ]);
    }
}
