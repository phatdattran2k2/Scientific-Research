<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Tests extends Model
{
    use HasFactory;
    protected $table = 'tests';
    protected $fillable = [
        'id',
        'name',
        'period',
        'duration',
        'number_question',
        'created_at',
        'updated_at'
    ];

    public function genre() {
        return $this->hasOne('App\Models\GenreWithTest', 'test_id', 'id');
    }

    public function detail() {
        return $this->hasMany('App\Models\TestDetail', 'test_id', 'id');
    }

    public function participants() {
        return $this->hasOne('App\Models\Participants', 'test_id', 'id');
    }
}
