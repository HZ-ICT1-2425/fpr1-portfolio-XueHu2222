<?php

namespace Database\Seeders;

use App\Models\Course;
use App\Models\Test;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DashboardSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $coursesData = [
            [
                'cu_code' => 'CU75001V3',
                'name' => 'Program Career Orientation (PCO)',
                'credits' => 2.5,
            ],
            [
                'cu_code' => 'CU75002V2',
                'name' => 'Computer Science Basics (CSB)',
                'credits' => 5,
            ],
            [
                'cu_code' => 'CU75003V1',
                'name' => 'Programming Basics (PBA)',
                'credits' => 5,
            ],
            [
                'cu_code' => 'CU75004V1',
                'name' => 'Object-oriented Programming (OOP)',
                'credits' => 10,
            ],
            [
                'cu_code' => 'CU75080V2',
                'name' => 'Framework Project1 (FPR1)',
                'credits' => 10,
            ],
            [
                'cu_code' => 'CU75011V3',
                'name' => 'Framework Project2 (FPR2)',
                'credits' => 10,
            ],
            [
                'cu_code' => 'CU75068V3',
                'name' => 'Personal Professional Development Exploration (PPD-E)',
                'credits' => 12.5,
            ]
        ];

        $testsData = [
            [
                'course_id' => 1,
                'name' => 'presentation',
                'weighing_factor' => 1
            ],
            [
                'course_id' => 2,
                'name' => 'presentation',
                'weighing_factor' => 1
            ],
            [
                'course_id' => 3,
                'name' => 'codeExam',
                'weighing_factor' => 1
            ],
            [
                'course_id' => 4,
                'name' => 'codeExam',
                'weighing_factor' => 0.5
            ],
            [
                'course_id' => 4,
                'name' => 'presentation',
                'weighing_factor' => 0.5
            ],
            [
                'course_id' => 5,
                'name' => 'presentation',
                'weighing_factor' => 0.5
            ],
            [
                'course_id' => 5,
                'name' => 'codeExam',
                'weighing_factor' => 0.5
            ],
            [
                'course_id' => 6,
                'name' => 'presentation',
                'weighing_factor' => 0.5
            ],
            [
                'course_id' => 6,
                'name' => 'codeExam',
                'weighing_factor' => 0.5
            ],
            [
                'course_id' => 7,
                'name' => 'portfolio',
                'weighing_factor' => 1
            ]
        ];

        foreach ($coursesData as $courseData) {
            $course = Course::create($courseData);
            foreach ($testsData as $testData) {
                if ($testData['course_id'] === $course->id) {
                    Test::create($testData);
                }
            }
        }
    }
}
