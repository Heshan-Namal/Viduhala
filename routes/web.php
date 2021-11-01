<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\roleController;
use App\Http\Controllers\ClassController;
use App\Http\Controllers\GradeController;
use App\Http\Controllers\SubjectController;
use App\Http\Controllers\StudentController;
use App\Http\Controllers\TeacherController;
use App\Http\Controllers\Grade_teacherController;
use App\Http\Controllers\PeriodController;
use App\Http\Controllers\Teacher_classController;
use App\Http\Controllers\Teacher_roleController;
use App\Http\Controllers\Student_subjectController;
use App\Http\Controllers\Subject_teacherController;
use App\Http\Controllers\TimetableController;
use App\Http\Controllers\Auth\CustomAuthController;
use App\Http\Controllers\AssController;
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('layouts.admin');
});


//Auth
 //check
Route::get('dashboard', [CustomAuthController::class, 'dashboard']); 
Route::get('login', [CustomAuthController::class, 'index'])->name('login');
Route::post('custom-login', [CustomAuthController::class, 'customLogin'])->name('login.custom'); 
Route::get('registration', [CustomAuthController::class, 'registration'])->name('register-user');
Route::post('custom-registration', [CustomAuthController::class, 'customRegistration'])->name('register.custom'); 
Route::get('signout', [CustomAuthController::class, 'signOut'])->name('signout');





Route::get('show',[roleController::class,'showToken']);


// Route::get('get-teachers/{id}',[roleController::class,'getallteacherers']);
// Route::post('addteacher',[roleController::class,'addteacher']);
// Route::put('updateteacher/{id}',[roleController::class,'updateteacher']);
// Route::delete('deleteteacher/{id}',[roleController::class,'destroy_a_teacher']);

//role routes
Route::post('addrole',[roleController::class,'addrole']);
Route::put('updaterole/{id}',[roleController::class,'updaterole']);
Route::delete('destroy_a_role/{id}',[roleController::class,'destroy_a_role']);

// Classroom routes
Route::get('getadmin_createclassroom/{id}',[ClassController::class,'getadmin_createclassroom']);
Route::get('getgrade_classroom/{id}',[ClassController::class,'getgrade_classroom']);
Route::get('getclassteacher_classroom/{id}',[ClassController::class,'getclassteacher_classroom']);
Route::post('addclass',[ClassController::class,'addclass']);
Route::put('updateclass/{id}',[ClassController::class,'updateclass']);
Route::delete('destroy_a_classroom/{id}',[ClassController::class,'destroy_a_classroom']);


// Grade routes
Route::get('getadmin_creategrade/{id}',[GradeController::class,'getadmin_creategrade']);
Route::get('get_gradeincharge_grade/{id}',[GradeController::class,'get_gradeincharge_grade']);
Route::get('getgradeincharge/{id}',[GradeController::class,'getgradeincharge']);
Route::post('addgrade',[GradeController::class,'addgrade']);
Route::put('updategrade/{id}',[GradeController::class,'updategrade']);
Route::delete('destroy_a_grade/{id}',[GradeController::class,'destroy_a_grade']);


// Subject routes
Route::get('getadmin_createsubject/{id}',[SubjectController::class,'getadmin_createsubject']);
Route::get('getgradesubjects/{id}',[SubjectController::class,'getgradesubjects']);
Route::post('addsubject',[SubjectController::class,'addsubject']);
Route::put('updatesubject/{id}',[SubjectController::class,'updatesubject']);
Route::delete('destroy_a_subject/{id}',[SubjectController::class,'destroy_a_subject']);

// Teacher routes
Route::get('getadmin_createteacher/{id}',[TeacherController::class,'getadmin_createteacher']);
Route::post('addteacher',[TeacherController::class,'addteacher']);
Route::put('updateteacher/{id}',[TeacherController::class,'updateteacher']);
Route::delete('destroy_a_teacher/{id}',[TeacherController::class,'destroy_a_teacher']);


// Student routes
Route::get('getclassstudents/{id}',[StudentController::class,'getadmin_createstudents']);
Route::get('getgradestudents/{id}',[StudentController::class,'getgradestudents']);
Route::post('addstudent',[StudentController::class,'addstudent']);
Route::put('updatestudent/{id}',[StudentController::class,'updatestudent']);
Route::delete('destroy_a_student/{id}',[StudentController::class,'destroy_a_student']);


// Teacher_role routes
Route::post('addteacher_role',[Teacher_roleController::class,'addteacher_role']);
Route::put('updateteacher_role/{id}',[Teacher_roleController::class,'updateteacher_role']);
Route::delete('destroy_a_teacher_role/{id}',[Teacher_roleController::class,'destroy_a_teacher_role']);
// teacher and role realtion routes
Route::get('getrolebased_teacher/{id}',[roleController::class,'getrolebased_teacher']);
Route::get('get-roles/{id}',[roleController::class,'getRoles']);



// Grade_teacher routes
Route::post('addgrade_teacher',[Grade_teacherController::class,'addgrade_teacher']);
Route::put('updategrade_teacher/{id}',[Grade_teacherController::class,'updategrade_teacher']);
Route::delete('destroy_a_grade_teacher/{id}',[Grade_teacherController::class,'destroy_a_grade_teacher']);
// teacher and grade realtion routes
Route::get('getgrades/{id}',[Grade_teacherController::class,'getgrades']);
//get gradeincharge of grade
Route::get('getteachersin_grade/{id}',[Grade_teacherController::class,'getteachersin_grade']);


// Teacher_class routes
Route::post('addteacher_class',[Teacher_classController::class,'addteacher_class']);
Route::put('updateteacher_class/{id}',[Teacher_classController::class,'updateteacher_class']);
Route::delete('destroy_a_teacher_class/{id}',[Teacher_classController::class,'destroy_a_teacher_class']);
// teacher and class realtion routes
Route::get('getclasses/{id}',[Teacher_classController::class,'getclasses']);
Route::get('getteachers/{id}',[Teacher_classController::class,'getteachers']);
//get class teacher of a classroom
Route::get('getclassroom_teacher/{id}',[ClassController::class,'getclassroom_teacher']);


// Student_subject routes
Route::post('addstudent_subject',[Student_subjectController::class,'addstudent_subject']);
Route::put('updatestudent_subject/{id}',[Student_subjectController::class,'updatestudent_subject']);
Route::delete('destroy_a_student_subject/{id}',[Student_subjectController::class,'destroy_a_student_subject']);


// Subject_teacher routes
Route::post('addsubject_teacher',[Subject_teacherController::class,'addsubject_teacher']);
Route::put('updatesubject_teacher/{id}',[Subject_teacherController::class,'updatesubject_teacher']);
Route::delete('destroy_a_subject_teacher/{id}',[Subject_teacherController::class,'destroy_a_subject_teacher']);
//get specific teacher subject name  and class name
Route::get('mySubjects/{id}',[Subject_teacherController::class,'mySubjects'])->name('teacher.subjects');
Route::get('mySubjects/{classid}/{subjectid}/matirial',[Subject_teacherController::class,'subjectMatirial'])->name('teacher.matirial');


// Timetable routes
Route::post('addtimetable',[TimetableController::class,'addtimetable']);
Route::put('updatetimetable/{id}',[TimetableController::class,'updatetimetable']);
Route::delete('destroy_a_timetable/{id}',[TimetableController::class,'destroy_a_timetable']);
//get class timetable (monday periodlist)
Route::get('showtimetable/{class_id}/{day}',[TimetableController::class,'showtimetable']);


// period routes
Route::post('updateperiod/{class_id}/{day}',[PeriodController::class,'updateperiod']);
Route::delete('destroy_a_timetable/{id}',[PeriodController::class,'destroy_a_timetable']);
Route::get('show_periods/{class_id}/{day}',[PeriodController::class,'show_periods']);

//Assesments Routes
Route::get('/ass/{classid}/{subjectid}/index',[AssController::class,'index'])->name('ass.index');
Route::get('/ass/{classid}/{subjectid}/create',[AssController::class,'create'])->name('ass.create');
Route::post('/ass/{classid}/{subjectid}/store',[AssController::class,'store'])->name('ass.store');
Route::get('/ass/{id}/edit',[AssController::class,'edit'])->name('ass.edit');
Route::put('/ass/{id}',[AssController::class,'update'])->name('ass.update');
Route::post('/ass/{id}/status',[AssController::class,'changeStatus'])->name('ass.status');

