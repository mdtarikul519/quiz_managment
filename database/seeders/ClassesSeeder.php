<?php

namespace Database\Seeders;

use App\Models\Classes;
use Illuminate\Database\Seeder;

class ClassesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Classes::truncate();
        Classes::create([
            'class_name' => 'five',
            'class_roll' => '1',
            'teacher_name' => 'tarek'

        ]);

        Classes::create([
            'class_name' => 'six',
            'class_roll' => '2',
            'teacher_name' => 'sorif'

        ]);
        Classes::create([
            'class_name' => 'seven',
            'class_roll' => '3',
            'teacher_name' => 'rana'

        ]);
    }
}
