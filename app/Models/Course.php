<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Course extends Model
{
    protected $fillable = ['cu_code', 'name', 'credits', 'passed_at'];

    public function tests()
    {
        return $this->hasMany(Test::class);
    }

    public function checkAndUpdateWeighingFactors()
    {
        $totalWeighingFactor = $this->tests->sum('weighing_factor');
    }

    public function calculateAndSetGrade()
    {
        $totalGrade = $this->tests->reduce(function ($carry, $test) {
            return $carry + ($test->best_grade * $test->weighing_factor);
        }, 0);

        $this->grade = $totalGrade;
        $this->save();

        $this->checkAndSetPassedAt();
    }

    protected function checkAndSetPassedAt()
    {
        if ($this->grade >= 5.5 && is_null($this->passed_at)) {
            $this->passed_at = now();
            $this->save();
        }
    }
}
