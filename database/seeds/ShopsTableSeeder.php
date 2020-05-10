<?php

use Illuminate\Database\Seeder;

class ShopsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('shops')->insert([
            'name' => 'パイザ亭',
            'address' => '東京都港区南青山3丁目',
            'category_id' => 1
        ]);
        
        DB::table('shops')->insert([
            'name' => 'ラーメンLaravel',
            'address' => '東京都港区東青山',
            'category_id' => 2
        ]);
        
        DB::table('shops')->insert([
            'name' => 'そばの霧島',
            'address' => '東京都港区西青山',
            'category_id' => 3
        ]);
        
    }
}


