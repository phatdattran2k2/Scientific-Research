<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Questions extends Model
{
    use HasFactory;
    protected $table = 'questions';
    protected $fillable = 
    [
        'id',
        'reading_id',
        'content',
        'answer_a',
        'answer_b',
        'answer_c',
        'answer_d',
        'correct_answer',
        'created_at',
        'updated_at'
    ];

    public function type() {
        return $this->hasOne('App\Models\QuestionWithType', 'question_id', 'id');
    }

    public function testDetail() {
        return $this->hasMany('App\Models\TestDetail', 'question_id', 'id');
    }

    public function readingTest() {
        return $this->belongsTo('App\Models\ReadingTests', 'reading_test_id', 'id');
    }

    public function answers() {
        return $this->hasMany('App\Models\Answers', 'question_id', 'id');
    }
}

