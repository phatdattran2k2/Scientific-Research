<?php

namespace App\Models;

use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Users extends Authenticatable
{
    use HasFactory;

    protected $table = 'users';
    protected $fillable = 
    [
        'id',
        'name',
        'email',
        'password',
        'created_at',
        'updated_at',
    ];
    protected $hidden = [
        'password'
    ];

    // public function tokken() {
    //     $this->hasMany('App\Models\PersonalAccessToken', 'user_id', 'id');
    // }

    public function userNotes() {
        return $this->hasMany('App\Models\UserNotes', 'user_id'); //('foreign_key', 'local_key')
    }

    public function todos() {
        return $this->hasMany('App\Models\todo', 'user_id'); //('foreign_key', 'local_key')
    }

    public function examDone() {
        return $this->hasMany('App\Models\TestsDone', 'user_id', 'id');
    }
}
