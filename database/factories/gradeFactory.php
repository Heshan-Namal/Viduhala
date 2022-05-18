<?php

namespace Database\Factories;

use App\Models\Grade;
use App\Models\Admin;
use App\Models\Teacher;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;


class gradeFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Grade::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'grade_no'  => $this->faker->numerify('#'),
            'num_of_classes' =>$this->faker->numerify('#'),
            'admin_id' =>Admin::pluck('id')->random(),
            'teacher_id' =>Teacher::pluck('id')->random(),
        ];
    }
}
