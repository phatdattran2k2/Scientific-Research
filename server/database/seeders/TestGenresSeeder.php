<?php

namespace Database\Seeders;

use Carbon\Carbon;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class TestGenresSeeder extends Seeder
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
                'name' => 'Đề THPTQG chính thức',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],
            [
                'name' => 'Đề thi thử THPTQG',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ]
        ];

        \DB::table('test_genres')->insert($data);
    }
}
