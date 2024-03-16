<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TestDetail extends Model
{
    use HasFactory;
    protected $table = 'test_detail';
    protected $fillable = [
        'test_id',
        'question_id',
        'question_order',
        'created_at',
        'updated_at'
    ];

    public function test() {
        return $this->belongsTo('App\Models\Tests', 'test_id', 'id');
    }

    public function question() {
        return $this->belongsTo('App\Models\Questions', 'question_id', 'id');
    }
}
