<?php

namespace Database\Seeders;
use Illuminate\Database\Seeder;
use App\Models\Student_period;

class Student_periodTableseeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
         Student_period::factory()->count(5)->create();    
    }
}
