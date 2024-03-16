<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ReadingTests extends Model
{
    use HasFactory;
    protected $table = 'reading_tests';
    protected $fillable = [
        'id',
        'content',
        'created_at',
        'updated_at'
    ];

    public function questions() {
        return $this->hasMany('App\Models\Questions', 'reading_test_id', 'id');
    }
}
