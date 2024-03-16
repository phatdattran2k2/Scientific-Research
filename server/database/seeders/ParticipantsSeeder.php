<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Carbon\Carbon;

class ParticipantsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $data = [
            [
                'test_id' => 1,
                'amount' => 1238,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],
            [
                'test_id' => 2,
                'amount' => 5348,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],
            [
                'test_id' => 3,
                'amount' => 1236,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],
            [
                'test_id' => 4,
                'amount' => 9813,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],
            [
                'test_id' => 5,
                'amount' => 1939,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],
            [
                'test_id' => 6,
                'amount' => 8901,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],
            [
                'test_id' => 7,
                'amount' => 7583,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],
            [
                'test_id' => 8,
                'amount' => 7981,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],
            [
                'test_id' => 9,
                'amount' => 9108,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],
            [
                'test_id' => 10,
                'amount' => 7832,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],
            [
                'test_id' => 11,
                'amount' => 3409,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],
            [
                'test_id' => 12,
                'amount' => 1297,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],
            [
                'test_id' => 13,
                'amount' => 2382,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],
            [
                'test_id' => 14,
                'amount' => 2397,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],
            [
                'test_id' => 15,
                'amount' => 1400,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],
            [
                'test_id' => 16,
                'amount' => 9310,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],
            [
                'test_id' => 17,
                'amount' => 2350,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],
        ];
        \DB::table('participants')->insert($data);
    }
}
