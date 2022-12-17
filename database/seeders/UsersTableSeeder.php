<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert([
            [
                'name' => 'jo',
                'email' => 'jo@localhost',     
                'password' => Hash::make('11111111'), 
            ],
            [
                'name' => 'karn',
                'email' => 'karn@localhost',          
                'password' => Hash::make('11111111'), 
            ],
        ]);
    
    }
}
