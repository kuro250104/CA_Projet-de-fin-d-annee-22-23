<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class CaliberSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        \DB::table('calibers')->insert(['name'=>'30']);
        \DB::table('calibers')->insert(['name'=>'53']);
        \DB::table('calibers')->insert(['name'=>'62']);
    }
}
