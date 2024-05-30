<?php
namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Question extends Model
{
    use HasFactory;

    protected $fillable = [
        '', 'course_id', 'question', 'quiz_detail', 'option1', 'option2', 'option3', 'option4', 'correct_answer', 'score', 'image'
    ];

    public function quiz()
    {
        return $this->belongsTo(Quiz::class);
    }

    public function course()
    {
        return $this->belongsTo(Course::class);
    }
    public function questions()
    {
    return $this->hasMany(Question::class);
    }
}

