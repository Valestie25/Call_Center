<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class DepartmentCCall extends Model
{
    use HasFactory;
    protected $table = ('CALLS_DEPARTMENT_C');
    public $timestamps = true;
}
