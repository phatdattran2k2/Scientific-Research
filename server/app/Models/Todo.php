<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Todo extends Model
{
    use HasFactory;

    protected $table = 'todo';
    protected $fillable = [
        'id',
        'user_id',
        'name',
        'description',
        'created_at',
        'updated_at'
    ];

    public function user() {
        return $this->belongsTo('App\Models\Users');
    }

    public function todoList() {
        return $this->hasMany('App\Models\TodoList', 'todo_id');
    }
}
