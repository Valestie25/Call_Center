<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class DepartmentBCall extends Model
{
    use HasFactory;
    protected $table = ('CALLS_DEPARTMENT_B');
    public $timestamps = true;
}
