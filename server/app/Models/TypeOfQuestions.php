<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TypeOfQuestions extends Model
{
    use HasFactory;
    protected $table = 'types';
    protected $fillable = 
    [
        'id',
        'name',
        'created_at',
        'updated_at'
    ];

    public function questions() {
        return $this->hasMany('App\Models\QuestionWithType', 'type_id', 'id');
    }

    public function test() {
        return $this->belongsToMany('App\Models\Questions', 'App\Models\QuestionWithType', 'question_id', 'type_id', 'id', 'id');
    }

}
