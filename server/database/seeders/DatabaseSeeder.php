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
        // \App\Models\User::factory(10)->create();

        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);

        // $this->call([
        //     UserSeeder::class,
        //     TypeQuestionSeeder::class,
        //     ReadingTestsSeeder::class,
        //     QuestionSeeder::class,
        //     QuestionWithTypeSeeder::class,
        //     TestsSeeder::class,
        //     TestGenresSeeder::class,
        //     GenreWithTestSeeder::class,
        //     TestDetailSeeder::class,
        //     ParticipantsSeeder::class,
        // ]);

        Model::unguard();
        $this->call(TestsDoneSeeder::class);
        Model::reguard();
    }
}
