<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Course extends Model
{
    use HasFactory;

    protected $fillable = [
        'title', 'slug', 'excerpt', 'body', 'instructor_id', 'category_id'
    ];

    public function category()
    {
        return $this->belongsTo(Category::class);
    }

    public function user()
    {   
        return $this->belongsTo(User::class);
    }

    public function coursex()
    {
        return $this->hasOne(Course::class, 'course_id');
    }
    public function questions()
    {
        return $this->hasMany(Question::class);
    }
}
