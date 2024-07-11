<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Student extends Model
{
    // Define the table if it's not following the naming convention
    protected $table = 'student';
    protected $primaryKey = 'student_id';

    // Define the fillable fields
    protected $fillable = [
        'student_id',
        'student_name',
        'dob',
        'gender',
        'address',
        'parent_guardian_contact_info',
        'other_contact',
        'email_address',
    ];
}
