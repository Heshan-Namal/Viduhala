<?php

namespace Database\Factories;

use App\Models\Period;
use App\Models\Timetable;
use App\Models\Teacher;
use App\Models\Classroom;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;


class periodFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Period::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'name'  => $this->faker->randomElement(['Period1','Period2','Period3','Period4','Period5','Period6']),
            'links'  => json_encode([$this->faker->randomElement(["0"=>"url1","1"=>"url2","2"=>"url3","3"=>"url4"])]),
            'notes'  => json_encode([$this->faker->randomElement(["0"=>"note1","1"=>"null","2"=>"null","3"=>"note4"])]),
            'timetable_id' =>Timetable::pluck('id')->random(),
            'class_id' =>Classroom::pluck('id')->random(),
        ];
    }
}
