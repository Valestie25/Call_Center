<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Employee;

class EmployeeController extends Controller
{
    function __invoke(){
        $employees = employee::select('NOMBRE', 'APELLIDOS')->get();

        $informacionDelTrabajador = [];
        foreach ($employees as $employee) {
            $informacionDelTrabajador[] = ['p' => date($employee['NOMBRE']), 'p' => floatval($employee['APELLIDOS'])];
        }

        return view('layouts.vistadepartamentoA',["employeeData" => json_encode($employees)]);
    }
}
