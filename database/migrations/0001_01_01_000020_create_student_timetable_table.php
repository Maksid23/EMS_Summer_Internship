<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('student_timetable', function (Blueprint $table) {
            $table->increments('stud_timetable')->primary(); // Primary Key
            $table->unsignedBigInteger('student_id'); // Foreign Key (Student)
            $table->unsignedBiginteger('class_id'); // Foreign Key (Management)
            $table->unsignedBiginteger('faculty_id'); // Foreign Key (Faculty)
            $table->unsignedBigInteger('course_id'); // Foreign Key (Super Admin)
            $table->string('day', 100);
            $table->string('time', 100);
            $table->string('location', 100);
            $table->timestamps();
            
            // Setting up foreign key constraints
            $table->foreign('student_id')->references('student_id')->on('student')->onDelete('cascade');
            $table->foreign('class_id')->references('class_id')->on('class')->onDelete('cascade');
            $table->foreign('faculty_id')->references('faculty_id')->on('faculty_info')->onDelete('cascade');
            $table->foreign('course_id')->references('course_id')->on('courses')->onDelete('cascade');

        }); 
    }
 
    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('student_timetable');
    }
};
