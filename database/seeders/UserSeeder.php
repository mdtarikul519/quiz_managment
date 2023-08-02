<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        User::truncate();
        User::create([
            'name' => 'tarek',
            'role_id' => '1',
            'email' => 'tarekmd519@gmail.com',
            'phon_number' => '01721251533',
            'image' => '',
            'password' => '12345678'
        ]);

        User::create([
            'name' => 'sorif',
            'role_id' => '2',
            'email' => 'sorif@gmail.com',
            'phon_number' => '01721251533',
            'image' => '',
            'password' => '12345678'
        ]);
        User::create([
            'name' => 'joton',
            'role_id' => '3',
            'email' => 'joton@gmail.com',
            'phon_number' => '01721251533',
            'image' => '',
            'password' => '12345678'
        ]);
    }
}
