<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class studnt extends Model
{
    use HasFactory;
    protected $table = 'student';
    protected $primaryKey = 'student_id';

    protected $fillable = [
        'student_id',
        'class_id',
        'student_name',
        'dob',
        'gender',	
        'address',
        'parent_guardian_contact_info',
        'other_contact',
        'email_address'
        
    ];
}
