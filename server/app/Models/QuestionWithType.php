<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class QuestionWithType extends Model
{
    use HasFactory;
    protected $table = 'question_type';
    protected $fillable = [
        'quesiton_id',
        'type_id',
        'created_at',
        'updated_at'
    ];

    public function types() {
        return $this->belongsTo('App\Models\TypeOfQuestions', 'type_id', 'id'); //(bảng đích*, khóa ngoại, khóa chính*)
    }

    public function questions() {
        return $this->belongsTo('App\Models\Questions', 'question_id', 'id');
    }
}
