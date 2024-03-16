<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Participants extends Model
{
    use HasFactory;
    protected $table = 'participants';
    protected $fillable = [
        'test_id',
        'amount',
        'created_at',
        'updated_at'
    ];

    public function test() {
        return $this->belongsTo('App\Models\Tests');
    }
}
