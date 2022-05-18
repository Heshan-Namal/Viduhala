<?php

namespace Database\Factories;

use App\Models\Subject;
use App\Models\Admin;
use App\Models\Grade;
use Illuminate\Database\Eloquent\Factories\Factory;

class SubjectFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Subject::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'name'=>$this->faker->randomElement(['Maths','Science','Sinhala','English','History','Religion']),
            'admin_id' => Admin::pluck('id')->random(),
            'grade_id' => Grade::pluck('id')->random(),
        ];
    }
}
