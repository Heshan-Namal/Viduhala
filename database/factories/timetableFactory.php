<?php

namespace Database\Factories;

use App\Models\Timetable;
use App\Models\Teacher;
use App\Models\Classroom;
use Illuminate\Database\Eloquent\Factories\Factory;

class timetableFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Timetable::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
                'day' =>$this->faker->randomElement(['Monday', 'Tuesday','Wednesday','Thursday','Friday']),
                'class_id'   => Classroom::pluck('id')->random(),
                'period1' =>$this->faker->randomElement(['Maths', 'Science','English','Health','History','Sinhala']),
                'period2' =>$this->faker->randomElement(['Maths', 'Science','English','Health','History','Sinhala']),
                'period3' =>$this->faker->randomElement(['Maths', 'Science','English','Health','History','Sinhala']),
                'period4' =>$this->faker->randomElement(['Maths', 'Science','English','Health','History','Sinhala']),
                'period5' =>$this->faker->randomElement(['Maths', 'Science','English','Health','History','Sinhala']),
                'period6' =>$this->faker->randomElement(['Maths', 'Science','English','Health','History','Sinhala']),
                'period7' =>$this->faker->randomElement(['Maths', 'Science','English','Health','History','Sinhala']),
                'period8' =>$this->faker->randomElement(['Maths', 'Science','English','Health','History','Sinhala']),
                'teacher_id' => Teacher::pluck('id')->random(),
        ];
    }
}
