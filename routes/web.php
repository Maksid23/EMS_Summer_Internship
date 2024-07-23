<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\FormController;
use App\Http\Controllers\StudentController;
use App\Http\Controllers\institutecontroller;
use App\Http\Controllers\FacultyController;
use App\Http\Controllers\MainController;
use App\Http\Controllers\StaffController;
use App\Http\Controllers\CourseController;
use App\Http\Controllers\ParentController;
use App\Http\Controllers\Clsscontroller;
use App\Http\Controllers\studenttimetablecontroller;
use App\Http\Controllers\student_dashboard_Controller;
use App\Http\Controllers\communicationcontroller;
use App\Models\Student;
use App\Models\Institute;

Route::get('/', [MainController::class, 'loadlogin']);



Route::group(['middleware' => 'disable_back_btn'], function () {
   Route::group(['middleware' => 'guest'], function () {
      Route::get('/login', [MainController::class, 'login']);
      Route::post('/loginUser', [MainController::class, 'loginUser'])->name('loginUser');
   });
});

Route::group(['middleware' => 'disable_back_btn'], function () {
   Route::group(['middleware' => 'auth'], function () {
      Route::get('/form', [FormController::class, 'showForm'])->name('form');
      Route::get('/logout', [MainController::class, 'logout'])->name('logout');
   });

   Route::group(['middleware' => 'Authteacher'], function () {
      Route::get('/form/3', [FormController::class, 'showForm'])->name('form.3');
      Route::group(['prefix' => '/faculty'], function () {

         Route::get('/', [FacultyController::class, 'showFacultyForm'])->name('faculty.form');
         Route::post('store', [FacultyController::class, 'storeFaculty'])->name('faculty.store');
         Route::get('delete/{faculty_id}', [FacultyController::class, 'delete']);
         Route::get('updateshow/{faculty_id}', [FacultyController::class, 'updateinfoview']);
         Route::post('update', [FacultyController::class, 'update']);
         Route::get('show', [FacultyController::class, 'showFaculty'])->name('show.faculty');
      });
   });


   Route::group(['middleware' => 'Authstudent'], function () {
      Route::get('/form/1', [FormController::class, 'showForm'])->name('form.1');
      Route::group(['prefix' => '/student'], function () {
         Route::get('/', [StudentController::class, 'index'])->name('student.form');
         Route::post('store', [StudentController::class, 'store'])->name('student.store');
         Route::get('view', [StudentController::class, 'view'])->name('student.view');
         Route::get('delete/{student_id}', [StudentController::class, 'delete']);
         Route::post('updatestudent', [StudentController::class, 'update'])->name('student.update');
         Route::get('edit/{student_id}', [StudentController::class, 'edit'])->name('student.edit');
      });
   });


   Route::group(['middleware' => 'Authmanagement'], function () {
      Route::get('/form/4', [FormController::class, 'showForm'])->name('form.4');
      Route::group(['prefix' => '/staff'], function () {
         Route::get('/', [StaffController::class, 'index'])->name('form.index');
         Route::post('form', [StaffController::class, 'insert'])->name('form.insert');
         Route::get('form/edit/{id}', [StaffController::class, 'edit'])->name('form.edit');
         Route::post('form/edit/update', [StaffController::class, 'update'])->name('form.update');
         Route::get('form/view', [StaffController::class, 'view'])->name('form.view');
         Route::get('form/delete/{id}', [StaffController::class, 'destroy'])->name('view.destroy');
      });
   });

   //Route::group(['middleware' => 'Authinstitute'], function () {
      Route::get('/form/2', [FormController::class, 'showForm'])->name('form.2');
      Route::get('/institute', function () {
         $institute = Institute::all();
         return view('instituteshow', compact('institute'));
      });
      Route::post('/institute/insert_institute', [institutecontroller::class, 'insert']);
      Route::get('/institute/delete_institute/{institute_id}', [institutecontroller::class, 'delete']);
      Route::get('/institute/edit_institute/{institute_id}', [institutecontroller::class, 'edit']);
      Route::post('/institute/update_institute/{institute_id}', [institutecontroller::class, 'update']);
      Route::get('/institute/insertinstitute', function () {
         return view('insertinstitute');
      });
   //});

   Route::group(['middleware' => 'Authparent'], function () {
      Route::get('/form/5', [FormController::class, 'showForm'])->name('form.5');
      Route::group(['prefix' => '/parent'], function () {
         Route::get('/', [ParentController::class, 'index']);
         Route::post('insertRecord', [ParentController::class, 'insert']);
         Route::post('update', [ParentController::class, 'update']);
         Route::get('deleteRecord/{parent_id}', [ParentController::class, 'delete']);
         Route::get('updateRecord/{parent_id}', [ParentController::class, 'edit']);
         Route::get('show', [ParentController::class, 'showparent']);
      });

   });
});


// Route to display the registration form
Route::get('/register1', [MainController::class, 'register1']);

// Route to handle the form submission
Route::post('/registerUser', [MainController::class, 'registerUser'])->name('register');



// Route to display the form
// Route::post('/register', [FormController::class, 'submitForm'])->name('register');

// Route to handle form submission
// Route::get('/student', [StudentController::class, 'showStudentForm'])->name('student.form');
// Route::post('/student/store', [StudentController::class, 'storeStudent'])->name('student.store');

// Route::get('/institute', [InstituteController::class, 'showInstituteForm'])->name('institute.form');
// Route::post('/institute/store', [InstituteController::class, 'storeInstitute'])->name('institute.store');

//  Route::get('/faculty', [FacultyController::class, 'showFacultyForm'])->name('faculty.form');
//  Route::post('/faculty/store', [FacultyController::class, 'storeFaculty'])->name('faculty.store');



Route::group(['prefix' => '/student_dashboard'], function () {
   Route::get('/', [student_dashboard_Controller::class, 'index'])->name('dashboard.form');
});





Route::group(['prefix' => 'clss'], function () {
   Route::get('/', [Clsscontroller::class, 'index'])->name('clss.form');
   Route::post('store', [Clsscontroller::class, 'insert'])->name('clss.store');
   Route::get('view', [Clsscontroller::class, 'view'])->name('clss.view');
   Route::get('delete/{class_id}', [Clsscontroller::class, 'delete'])->name('clss.delete');
   Route::get('edit/{class_id}', [Clsscontroller::class, 'edit'])->name('clss.edit');
   Route::post('update', [Clsscontroller::class, 'update'])->name('clss.update');
});



Route::group(['prefix'=> '/course'], function () {
   Route::get('/courseview', [CourseController::class, 'view'])->name('course.view');
   Route::get('/add', [CourseController::class, 'insertform']);
   Route::post('/add_course', [CourseController::class, 'insert']);
   Route::get('/delete/{course_id}', [CourseController::class, 'delete']);
   Route::get('/edit/{course_id}', [Coursecontroller::class, 'edit']);
   Route::post('/update', [coursecontroller::class, 'update']);
});



Route::group(['prefix' => '/parentdashboard'], function () {
   Route::get('/', [ParentController::class, 'index1']);
});

// Route::group(['prefix'=> '/course'], function () {
//    Route::get('/', [CourseController::class, 'view'])->name('course.view');
//    Route::get('/add', [CourseController::class, 'insertform']);
//    Route::post('/add_course', [CourseController::class, 'insert']);
//    Route::get('/delete/{$course_id}', [CourseController::class, 'delete']);
// });

Route::group(['prefix' => '/studentTimetable'], function () {
   Route::get('/', [studenttimetablecontroller::class, 'showstudtimeform']);
   Route::post('store', [studenttimetablecontroller::class, 'storestudtimetable'])->name('timetable.store');
   Route::get('show', [studenttimetablecontroller::class, 'showstudtime']);
   Route::get('delete/{stud_timetable}', [studenttimetablecontroller::class, 'delete']);
   Route::get('updateshow/{stud_timetable}', [studenttimetablecontroller::class, 'updateinfoview']);
   Route::post('update', [studenttimetablecontroller::class, 'update']);
});

//communication route
Route::group(['prefix' => 'communication'], function() {
    Route::get('/', [communicationcontroller::class, 'index'])->name('communication.form');
    Route::post('store', [communicationcontroller::class, 'store']);
    Route::get('view', [communicationcontroller::class, 'view']);
    Route::get('delete/{staff_id}', [communicationcontroller::class, 'delete']);
    Route::get('edit/{staff_id}', [communicationcontroller::class, 'edit']);
    Route::post('update', [communicationcontroller::class, 'update']);
});

