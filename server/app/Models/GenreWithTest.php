<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class GenreWithTest extends Model
{
    use HasFactory;

    protected $table = 'genre_test';
    protected $fillable = [
        'test_id',
        'genre_id',
        'created_at',
        'updated_at'
    ];

    public function test() {
        return $this->belongsTo('App\Models\Tests', 'test_id', 'id');
    }

    public function genre() {
        return $this->belongsTo('App\Models\TestGenres', 'genre_id', 'id');
    }
}
