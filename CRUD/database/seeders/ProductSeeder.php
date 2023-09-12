<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;


use Faker\Factory as Faker;


class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        
        DB::table('products')->delete();
        $faker = Faker::create();

        foreach (range(1, 10) as $index) {
            DB::table('products')->insert([
                'name' => $faker->words(3, true),
                'description' => $faker->sentence,
                'price' => $faker->randomFloat(2, 10, 100),
                'photo' => $faker->imageUrl(400, 300, 'cats'),
                'created_at' => now(),
                'updated_at' => now(),
            ]);
        }
    }
}
