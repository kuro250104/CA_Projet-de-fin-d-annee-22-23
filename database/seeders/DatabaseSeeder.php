<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        \App\Models\Customer::factory(10)->has(
            \App\Models\Order::factory()->count(3)
        )->create();

        $this->call([
            CaliberSeeder::class,
        ]);

        for($i=1; $i<=10; $i++){
            \App\Models\Delivery::factory()->state(['order_id'=>$i])->create();
        }

        \App\Models\Product::factory(10)->create();

        // \App\Models\Order_Lines::factory(10)->create();
    }

}
