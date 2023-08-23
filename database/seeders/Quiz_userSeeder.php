<?php

namespace Database\Seeders;

use App\Models\Quiz_user;
use Illuminate\Database\Seeder;

class Quiz_userSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Quiz_user::truncate();
        Quiz_user::create([ 
            'user_id' => '2',
            'quiz_id' => '1',
            'marke' => '4',
        ]);

        Quiz_user::create([ 
            'user_id' => '2',
            'quiz_id' => '2',
            'marke' => '2',
        ]);

        Quiz_user::create([ 
            'user_id' => '3',
            'quiz_id' => '3',
            'marke' => '1',
        ]);
    }
}
