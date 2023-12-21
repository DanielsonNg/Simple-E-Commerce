<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert(([
            'name'=>'Admin',
            'email'=>'admin@gmail.com',
            'password'=>bcrypt('admin123'),
            'phone'=>('2131232131'),
            'address'=>('jalan jalan'),
            'role'=>('admin'),
        ]));

        DB::table('users')->insert(([
            'name'=>'Daniel',
            'email'=>'daniel@gmail.com',
            'password'=>bcrypt('daniel123'),
            'phone'=>('0816237162'),
            'address'=>('jalan mega'),
        ]));

        DB::table('users')->insert(([
            'name'=>'Khawn',
            'email'=>'khawen@gmail.com',
            'password'=>bcrypt('khawen123'),
            'phone'=>('0816237162'),
            'address'=>('jalan mega'),
        ]));
    }
}
