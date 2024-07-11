<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Faculty extends Model
{
    // Specify the table associated with the model
    protected $table = 'faculty_info';

    // Specify the primary key for the model
    protected $primaryKey = 'id';

    // Specify the attributes that are mass assignable
    protected $fillable = [
        'faculty_id',
        'faculty_name',
        'faculty_age',
        'faculty_dob',
        'faculty_gender',
        'faculty_contact',
        'faculty_address',
        'faculty_email',
        'faculty_qualification',
        'faculty_doj',
        'faculty_specializations',
        'faculty_experience',
        'faculty_designation',
        'faculty_department',
    ];
}
