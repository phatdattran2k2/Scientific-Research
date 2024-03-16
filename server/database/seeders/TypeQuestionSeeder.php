<?php

namespace Database\Seeders;

use Carbon\Carbon;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class TypeQuestionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        $data = [
            [
                'name' => 'combine',
                'description' => 'Mark the letter A, B, C, or D on your answer sheet to indicate the sentence that best combines each pair of sentences in the following questions.',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],
            [ 
                'name' => 'pronunciation', 
                'description' => 'Mark the letter A, B, C, or D on your answer sheet to indicate the word whoose underlined part differs from the other three in pronunciation in each of the following questions.',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],
            [
                'name' => 'stress',
                'description' => 'Mark the letter A, B, C, or D on your answer sheet to indicate the word that differs from the other three in the postion of stress in each of the following questions.',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],
            [
                'name' => 'opposite',
                'description' => 'Mark the letter A, B, C, or D on your answer sheet to indicate the word(s) OPPOSITE in meaning to the underlined word(s) in each of the following questions.', 
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],
            [
                'name' => 'complete',
                'description' => 'Mark the letter A, B, C, or D on your answer sheet to indicate the sentence that best completes each of the following exchanges.',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],
            [
                'name' => 'correct',
                'description' => 'Mark the letter A, B, C, or D on your answer sheet to indicate the correct answer to each of the following questions.', 
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],
            [
                'name' => 'closestMeaning',
                'description' => 'Mark the letter A, B, C, or D on your answer sheet to indicate the word CLOSEST in meaning to the underlined word in each of the following questions.', 
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],
            [
                'name' => 'blank',
                'description' => 'Read the following passage and mark the letter A, B, C, or D on your answer sheet to indicate the correct word or phrase that best fits each of the numbered blanks.', 
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],
            [
                'name' => 'reading',
                'description' => 'Read the following passage and mark the letter A, B, C, or D on your answer sheet to indicate the correct answer to each of the questions.', 
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],
            [
                'name' => 'correction',
                'description' => 'Mark the letter A, B, C, or D on your answer sheet to indicate the underlined part that needs correction in each of the following questions.', 
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],
            [
                'name' => 'closestMeaningSentence',
                'description' => 'Mark the letter A, B, C, or D on your answer sheet to indicate the sentence that is closest in meaning to the each of the following questions.', 
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],
        ];
        \DB::table('types')->insert($data);
    }
}
