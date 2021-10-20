<?php

use App\Models\Teacher;
use Illuminate\Database\Seeder;

class TeacherTableseeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $teacher = [
            [
                'id'         => 111,
                'name'       =>'kamala',
                'email'      =>'kamala@com',
                'password'   =>1234,
                'admin_id' =>16440
            ],
            [
                'id'         => 222,
                'name'       =>'nayana',
                'email'      =>'nayana@com',
                'password'   =>1234,
                'admin_id' =>16440
            ],
            [
                'id'         => 333,
                'name'       =>'sujeewa',
                'email'      =>'sujeewaa@com',
                'password'   =>1234,
                'admin_id' =>16440
            ],
            [
                'id'         => 444,
                'name'       =>'nimala',
                'email'      =>'nimala@com',
                'password'   =>1234,
                'admin_id' =>16440
            ],

            ];
            Teacher::insert($teacher);
    }
}
