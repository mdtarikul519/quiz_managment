<?php

namespace Database\Seeders;

use App\Models\Quiz;
use Illuminate\Database\Seeder;

class QuizSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Quiz::truncate();
        Quiz::create([
            'class_id' => '1',
            'quiz_name' => 'math',
            'teacher' => 'Rana',
            'image' =>'quiz/tarek.jpg'

        ]);

        Quiz::create([
            'class_id' => '2',
            'quiz_name' => 'English',
            'teacher' => 'sorif',
            'image' =>'quiz/sorif.png'
        ]);
        Quiz::create([
            'class_id' => '3',
            'quiz_name' => 'php Programing',
            'teacher' => 'tarek',
            'image' =>'quiz/joton.png'
        ]);
    }
}
