<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class SalepageSectionsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('salepage_sections')->insert([
            [
                'user_id' => 1,
                'section' => 'salepage.partials.header',
                'order' => 1,
                'status' => 1
            ],
            [
                'user_id' => 1,
                'section' => 'salepage.partials.parallax',
                'order' => 2,
                'status' => 1
            ],
            [
                'user_id' => 1,
                'section' => 'salepage.partials.highlight',
                'order' => 3,
                'status' => 1
            ],
            [
                'user_id' => 1,
                'section' => 'salepage.partials.list',
                'order' => 4,
                'status' => 1
            ],
            [
                'user_id' => 1,
                'section' => 'salepage.partials.textbar',
                'order' => 5,
                'status' => 1
            ],
            [
                'user_id' => 1,
                'section' => 'salepage.partials.gallery',
                'order' => 6,
                'status' => 1
            ],
            [
                'user_id' => 1,
                'section' => 'salepage.partials.bonus',
                'order' => 7,
                'status' => 1
            ],
            [
                'user_id' => 1,
                'section' => 'salepage.partials.itemlist',
                'order' => 8,
                'status' => 1
            ],
            [
                'user_id' => 1,
                'section' => 'salepage.partials.testimonial',
                'order' => 9,
                'status' => 1
            ],
            [
                'user_id' => 1,
                'section' => 'salepage.partials.award',
                'order' => 10,
                'status' => 1
            ],
            [
                'user_id' => 1,
                'section' => 'salepage.partials.purchase',
                'order' => 11,
                'status' => 1
            ],
            [
                'user_id' => 1,
                'section' => 'salepage.partials.footer',
                'order' => 11,
                'status' => 1
            ]
        ]);
    }
}

