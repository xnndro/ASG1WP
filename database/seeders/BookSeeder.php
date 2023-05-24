<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Faker\Factory as Faker;

class BookSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $faker = Faker::create('id_ID');
        for ($i = 1; $i <= 100; $i++) {
            DB::table('books')->insert([
                'publisher_id' => $faker->numberBetween(1, 10),
                'title' => $faker->sentence(4),
                'author' => $faker->name,
                'year' => $faker->year,
                'synopsis' => $faker->paragraph(1),
                'image' => $faker->imageUrl(640, 480, 'books', true),
                'created_at' => now(),
                'updated_at' => now(),
            ]);
        }
    }
}
