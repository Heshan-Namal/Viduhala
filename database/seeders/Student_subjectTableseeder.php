<?php

namespace Database\Seeders;
use Illuminate\Database\Seeder;
use App\Models\Student_subject;

class Student_subjectTableseeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Student_subject::factory()->count(5)->create();    
    }
}
