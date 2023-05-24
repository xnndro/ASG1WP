<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Faker\Factory as Faker;

class BookCategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $faker = Faker::create('id_ID');
        for ($i = 1; $i <= 100; $i++) {
            for($j = 1; $j <= $faker->numberBetween(1, 10); $j++)
            {
                DB::table('book_categories')->insert([
                    'book_id' => $i,
                    'category_id' => $faker->numberBetween(1, 10),
                ]);
            }
        }
    }
}
