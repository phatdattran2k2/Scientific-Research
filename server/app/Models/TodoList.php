<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TodoList extends Model
{
    use HasFactory;

    protected $table = 'todo_list';
    protected $fillable = [
        'id',
        'todo_id',
        'name',
        'schedule_type',
        'schedule',
        'created_at',
        'updated_at'
    ];

    public function todo() {
        $this->belongsTo('App\Models\Todo');
    }

    public function todoItem() {
        $this->hasMany('App\Models\TodoItem', 'todo_list_id');
    }
}
