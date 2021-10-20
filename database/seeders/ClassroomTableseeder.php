<?php
use App\Models\Classroom;
use Illuminate\Database\Seeder;

class ClassroomTableseeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $classroom = [
            [
                'id'         => 1001,
                'name'       =>'5-A',
                'num_of_student'      =>45,
                'admin_id'   =>16440,
                'teacher_id' =>111,
                'grade_id' =>555
            ],
            [
                'id'         => 1002,
                'name'       =>'5-B',
                'num_of_student'      =>45,
                'admin_id'   =>16440,
                'teacher_id' =>222,
                'grade_id' =>555
            ],
            [
                'id'         => 1003,
                'name'       =>'5-C',
                'num_of_student'      =>45,
                'admin_id'   =>16440,
                'teacher_id' =>333,
                'grade_id' =>555
            ],

            ];
            Classroom::insert($classroom);
    }
}
