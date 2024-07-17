<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class parents extends Model
{
    use HasFactory;
    protected $table = 'parent';
    protected $primaryKey = 'parent_id';

    protected $fillable = [
        'parent_id',
        'parent_name',
        'contact_number',
        'parent_email',
        'address',
        'relationship_to_student',
    ];
}
