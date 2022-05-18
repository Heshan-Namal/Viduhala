<?php

namespace Database\Factories;

use App\Models\Student_period;
use App\Models\Student;
use App\Models\Period;
use Illuminate\Database\Eloquent\Factories\Factory;

class Student_periodFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Student_period::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'student_id' =>Student::pluck('id')->random(),
            'period_id' =>Period::pluck('id')->random(),
            'attendance' => $this->faker->randomElement(['0','1']),        
        ];
    }
}
