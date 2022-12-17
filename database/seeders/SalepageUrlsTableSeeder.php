<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class SalepageUrlsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('sale_page_urls')->insert([
            [
                'user_id' => 1,
                'name' => 'แนวเฉลยข้อสอบ IJSO รอบแรก ปี 59-63 | ijsoworksheet',
                'url' => 'ijsoworksheet',
            ],
            [
                'user_id' => 2,
                'name' => 'หวยเวียดนามเข้าทุกงวด | vnlotto',
                'url' => 'vnlotto',
            ]
        ]);
    }
}
