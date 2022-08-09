<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class DepartmentDCall extends Model
{
    use HasFactory;
    protected $table = ('CALLS_DEPARTMENT_D');
    public $timestamps = true;
}
