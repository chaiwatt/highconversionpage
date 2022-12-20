<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class ProductsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('products')->insert([
            [
                'sale_page_url_id' => 1,
                'product_code' => 'phy01',
                'name' => 'ฟิสิกส์',
                'price' => 250,
            ],
            [
                'sale_page_url_id' => 1,
                'product_code' => 'chem01',
                'name' => 'เคมี',
                'price' => 250,
            ],
            [
                'sale_page_url_id' => 1,
                'product_code' => 'bio01',
                'name' => 'ชีววิทยา',
                'price' => 250,
            ],
            [
                'sale_page_url_id' => 1,
                'product_code' => 'all01',
                'name' => 'แพ็ครวม',
                'price' => 650,
            ]
        ]);
    }
}
