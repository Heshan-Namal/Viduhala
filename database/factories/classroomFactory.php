<?php

namespace Database\Factories;

use App\Models\Classroom;
use App\Models\Admin;
use App\Models\Grade;
use App\Models\Teacher;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;


class classroomFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Classroom::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'name'  => $this->faker->bothify('#-?'),
            'num_of_student' =>$this->faker->numerify('##'),
            'admin_id' =>Admin::pluck('id')->random(),
            'teacher_id' =>Teacher::pluck('id')->random(),
            'grade_id' =>Grade::pluck('id')->random(),
        ];
    }
}
