<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TodoItem extends Model
{
    use HasFactory;

    protected $table = 'todo_item';
    protected $fillable = [
        'id',
        'todo_list_id',
        'task',
        'status',
        'created_at',
        'updated_at'
    ];

    public function todoList() {
        $this->belongsTo('App\Models\TodoList');
    }

}
