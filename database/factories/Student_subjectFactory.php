<?php

namespace Database\Factories;

use App\Models\Student_subject;
use App\Models\Student;
use App\Models\Subject;
use Illuminate\Database\Eloquent\Factories\Factory;

class Student_subjectFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Student_subject::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'student_id' =>Student::pluck('id')->random(),
            'subject_id' =>Subject::pluck('id')->random(),
        ];
    }
}
