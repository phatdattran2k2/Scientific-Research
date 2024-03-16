<?php

namespace Database\Seeders;

use DB;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

use Faker as Faker;

class TestsDoneSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = Faker\Factory::create();

        $limit = 100;

        for ($i = 0; $i < $limit; $i++) {

            $minutes = strval($faker->numberBetween($min = 0, $max = 60));
            $seconds = strval($faker->numberBetween($min = 0, $max = 60));
            $completion_time = $minutes. ':' .$seconds;

            $correctAnswer = $faker->numberBetween($min = 0, $max = 50);
            $score = $correctAnswer*0.2;

            $createdAt = $faker->dateTimeBetween('2023-07-01', '2023-09-30');
            $updatedAt = $createdAt;

            DB::table('tests_done')->insert([
                'user_id' => $faker->numberBetween($min = 2, $max = 6),
                'test_id' => $faker->numberBetween($min = 1, $max = 17),
                'completion_time' => $completion_time,
                'number_correct_answer' => $correctAnswer,
                'score' => $score,
                'created_at' => $createdAt,
                'updated_at' => $updatedAt,
            ]);
        }
        
    }
}
