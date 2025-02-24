<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Test extends Model
{
    protected $fillable = ['course_id', 'name', 'weighing_factor', 'lowest_passing_grade', 'best_grade'];

    public function course()
    {
        return $this->belongsTo(Course::class);
    }

    protected static function booted()
    {
        static::updating(function ($test) {
            if ($test->best_grade < $test->getOriginal('best_grade')) {
                return false;
            }
        });
    }
}
