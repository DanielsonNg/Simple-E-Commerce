<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('categories')->insert(([
            'name'=>'Ruang Keluarga',
            'image'=>'./images/living.jpg'
        ]));
        DB::table('categories')->insert(([
            'name'=>'Kamar Tidur',
            'image'=>'./images/bedroom.jpg'
        ]));
        DB::table('categories')->insert(([
            'name'=>'Kamar Mandi',
            'image'=>'./images/bathroom.jpg'
        ]));
        DB::table('categories')->insert(([
            'name'=>'Dapur',
            'image'=>'./images/kitchen.jpg'
        ]));
        DB::table('categories')->insert(([
            'name'=>'Ruang Makan',
            'image'=>'./images/dinner.jpg'
        ]));
        DB::table('categories')->insert(([
            'name'=>'Ruang Kerja',
            'image'=>'./images/office.jpg'
        ]));
    }
}
