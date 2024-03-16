<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Answers extends Model
{
    use HasFactory;
    protected $table = 'answers';
    protected $fillable = [
        'test_done_id',
        'user_id',
        'test_id',
        'question_id',
        'answer',
        'isRight',
        'created_at',
        'updated_at'
    ];
}
