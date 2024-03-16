<?php

namespace Database\Seeders;

use Carbon\Carbon;
use Illuminate\Support\Facades\Hash;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Database\Seeders\Faker\Factory;


class UserSeeder extends Seeder
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
                'name' => 'ADMIN',
                'email' => 'admin@gmail.com',
                'password' => Hash::make('admin123'),
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'name' => 'Cường Nguyễn',
                'email' => 'littlecuong922@gmail.com',
                'password' => Hash::make('cuong922002'),
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'name' => 'Trần Phát Đạt',
                'email' => 'dat@gmail.com',
                'password' => Hash::make('dat123'),
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'name' => 'Nguyễn Ngọc Trâm',
                'email' => 'tram@gmail.com',
                'password' => Hash::make('tram123'),                
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'name' => 'Đinh Tuấn Kiệt',
                'email' => 'kiet@gmail.com',
                'password' => Hash::make('kiet123'),
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'name' => 'Văn Hoàng Hải Đăng',
                'email' => 'dang@gmail.com',
                'password' => Hash::make('dang123'),
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
        ];

        \DB::table('users')->insert($data);
    }
}
