<?php

use Illuminate\Database\Seeder;
use App\User;

class UsersTableSeeder extends Seeder
{
    public function run()
    {
        $user = User::firstOrCreate([
            'id' => 1,
            'email' => 'user@gmail.com',
            'password' => bcrypt('nanozero1')
        ]);
        $user->assignRole('Siswa');
    }
}
