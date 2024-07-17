<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class staff extends Model
{
    use HasFactory;
    protected $table = 'staff_information'; // Specify the table name if it's not the default

    protected $primaryKey = 'staff_id'; // Specify the primary key if it's not 'id'
}
