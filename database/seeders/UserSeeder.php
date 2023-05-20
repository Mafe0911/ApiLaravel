<?php

namespace Database\Seeders;

use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $password = Hash::make('123456');

        $users = [
            [
                'name' => 'Fuan',
                'email' => 'fuan@gmail.com',
                'password' => $password,
            ],
            [
                'name' => 'Mafecita',
                'email' => 'mafecita@gmail.com',
                'password' => $password,
            ],
            [
                'name' => 'Emilio',
                'email' => 'emilio@gmail.com',
                'password' => $password,
            ],
            [
                'name' => 'Luis Miguel',
                'email' => 'mitomgg13@gmail.com',
                'password' => $password,
            ],
        ];

        DB::table('users')->insert($users);
    }
}
