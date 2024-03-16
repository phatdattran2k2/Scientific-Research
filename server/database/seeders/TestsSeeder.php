<?php

namespace Database\Seeders;

use Carbon\Carbon;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class TestsSeeder extends Seeder
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
                'name' => 'Đề thi THPTQG 2018',
                'period' => '[2018 - 2019]',
                'duration' => '60 phút',
                'number_question' => 50,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'name' => 'Đề thi thử THPTQG 2018 số 1',
                'period' => '[2018 - 2019]',
                'duration' => '60 phút',
                'number_question' => 50,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'name' => 'Đề thi thử THPTQG 2018 số 2',
                'period' => '[2018 - 2019]',
                'duration' => '60 phút',
                'number_question' => 50,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'name' => 'Đề thi THPTQG 2019',
                'period' => '[2019 - 2020]',
                'duration' => '60 phút',
                'number_question' => 50,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'name' => 'Đề thi thử THPTQG 2019 số 1',
                'period' => '[2018 - 2019]',
                'duration' => '60 phút',
                'number_question' => 50,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'name' => 'Đề thi thử THPTQG 2019 số 2',
                'period' => '[2018 - 2019]',
                'duration' => '60 phút',
                'number_question' => 50,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'name' => 'Đề thi THPTQG 2020',
                'period' => '[2020 - 2021]',
                'duration' => '60 phút',
                'number_question' => 50,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'name' => 'Đề thi thử THPTQG 2020 số 1',
                'period' => '[2018 - 2019]',
                'duration' => '60 phút',
                'number_question' => 50,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'name' => 'Đề thi thử THPTQG 2020 số 2',
                'period' => '[2018 - 2019]',
                'duration' => '60 phút',
                'number_question' => 50,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'name' => 'Đề thi THPTQG 2021',
                'period' => '[2021 - 2022]',
                'duration' => '60 phút',
                'number_question' => 50,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'name' => 'Đề thi thử THPTQG 2021 số 1',
                'period' => '[2018 - 2019]',
                'duration' => '60 phút',
                'number_question' => 50,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'name' => 'Đề thi thử THPTQG 2021 số 2',
                'period' => '[2018 - 2019]',
                'duration' => '60 phút',
                'number_question' => 50,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'name' => 'Đề thi THPTQG 2022',
                'period' => '[2022 - 2023]',
                'duration' => '60 phút',
                'number_question' => 50,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'name' => 'Đề thi thử THPTQG 2022 số 1',
                'period' => '[2018 - 2019]',
                'duration' => '60 phút',
                'number_question' => 50,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'name' => 'Đề thi thử THPTQG 2022 số 2',
                'period' => '[2018 - 2019]',
                'duration' => '60 phút',
                'number_question' => 50,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'name' => 'Đề thi THPTQG 2023',
                'period' => '[2023 - 2024]',
                'duration' => '60 phút',
                'number_question' => 50,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'name' => 'Đề thi thử THPTQG 2023 số 1',
                'period' => '[2023 - 2024]',
                'duration' => '60 phút',
                'number_question' => 50,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
        ];

        \DB::table('tests')->insert($data);
    }
}
