<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DepartamentoDController extends Controller
{
    public function __invoke(){
        return view('layouts.departamentoD');
    }
}
