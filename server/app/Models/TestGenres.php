<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TestGenres extends Model
{
    use HasFactory;

    protected $table = 'test_genres';
    protected $fillable = [
        'id',
        'name',
        'created_at',
        'updated_at'
    ];

    public function test() {
        return $this->hasOne('App\Models\GenreWithTest', 'genre_id', 'id');
    }
}
