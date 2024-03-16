<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class UserNotes extends Model
{
    use HasFactory;
    protected $table = 'user_notes';
    protected $fillable = 
    [
        'id',
        'user_id',
        'heading',
        'note',
        'created_at',
        'updated_at',
    ];

    public function users() {
        $this->belongsTo('App\Models\Users');
    }
}
