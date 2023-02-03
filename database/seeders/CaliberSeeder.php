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
        $datas = [
            "30",
            "53",
            "62"
        ];
        foreach($datas as $data) {
            \DB::table('calibers')->insert(['name'=>$data]);
        }
    }
}
