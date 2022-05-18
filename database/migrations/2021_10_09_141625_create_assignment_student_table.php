<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAssignmentStudentTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('Assignment_student', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('assignment_id');
            $table->unsignedBigInteger('student_id');
            $table->string('submission_name')->nullable();
            $table->string('submission_path')->nullable();
            $table->enum('status',['Graded','Grading in Progress'])->default('Grading in Progress');
            $table->enum('grade',['A','B','C','S','W'])->nullable()->default(NUll);
            $table->foreign('student_id')->references('id')->on('Student')->onDelete('cascade');
            $table->foreign('assignment_id')->references('id')->on('Assignment')->onDelete('cascade');
            $table->unique(['student_id','assignment_id']);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('Assignment_student');
    }
}
