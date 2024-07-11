<?php
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\FormController;
use App\Http\Controllers\StudentController;
use App\Http\Controllers\InstituteController;
use App\Http\Controllers\FacultyController;
use App\Models\Student;
use App\Http\Controllers\MainController;
//Route::get('/admin',[MainController::class,'admin']);
Route::get('/login',[MainController::class,'login']);
 Route::get('/register1',[MainController::class,'register1']);
 Route::get('/registerUser',[MainController::class,'registerUser']);
 Route::post('/loginUser',[MainController::class,'loginUser'])->name('loginUser');// Example login route
 // Route::get('/loginUser',[MainController::class,'loginUser']);// Example login route
 // Route::get('/login', function () {
    //     return view('login'); // Ensure 'login' is the correct view name for your login page
    // });
    
    
    
    // Route to display the form
    Route::get('/form', [FormController::class, 'showForm'])->name('form');
    
    // Route to handle form submission
    Route::post('/register', [FormController::class, 'submitForm'])->name('register');
    Route::get('/student', [StudentController::class, 'showStudentForm'])->name('student.form');
    Route::post('/student/store', [StudentController::class, 'storeStudent'])->name('student.store');
    
    Route::get('/institute', [InstituteController::class, 'showInstituteForm'])->name('institute.form');
    Route::post('/institute/store', [InstituteController::class, 'storeInstitute'])->name('institute.store');
    
    Route::get('/faculty', [FacultyController::class, 'showFacultyForm'])->name('faculty.form');
    Route::post('/faculty/store', [FacultyController::class, 'storeFaculty'])->name('faculty.store');
    
    Route::post('/logout',[MainController::class,'logout'])->name('logout');