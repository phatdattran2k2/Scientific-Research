<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TestsDone extends Model
{
    use HasFactory;
    protected $table = 'tests_done';
    protected $fillable = [
        'id',
        'user_id',
        'test_id',
        'completion_time',
        'number_correct_answer',
        'score',
        'created_at',
        'updated_at'
    ];

    public function users() {
        return $this->belongsTo('App\Models\Users');
    }
}
