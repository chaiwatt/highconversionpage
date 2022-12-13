<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class SubDomainsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('sub_domains')->insert([
            [
                'name' => 'ijsoworksheet',
            ],
            [
                'name' => 'laolotto',
            ],
            [
                'name' => 'vnlotto',
            ],
            [
                'name' => 'forexsignal',
            ]
           
        ]);
    }
}
