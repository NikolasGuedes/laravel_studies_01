<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //1 - add users directly
        // DB::table('users')->insert([
        //     'username' => 'user 01',
        //     'password' => bcrypt('senha'),
        //     'active' => true,
        // ]);

        //2 - add more users
        // $users = [
        //     [
        //         'username' => 'User2',
        //         'password' => bcrypt('senha')
        //     ],
        //     [
        //         'username' => 'User3',
        //         'password' => bcrypt('senha')
        //     ],
        //     [
        //         'username' => 'User4',
        //         'password' => bcrypt('senha')
        //     ],
        // ];

        // DB::table('users')->insert($users);
        //3 - add random users
        $users = [];
        for($index = 0; $index < 10; $index++){
            $users[] = [
                'username' => Str::random(10),
                'password' => bcrypt('senha'),
            ];
        }
    }
}
