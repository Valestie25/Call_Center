<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\models\employee;

class EmployeeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $dataEmployee = [
            array('NOMBRE' =>'Darb', 'APELLIDOS' =>'Gramer', 'DEPARTAMENTO' => 'A'),
            array('NOMBRE' =>'Tana', 'APELLIDOS' =>'Oluwatoyin', 'DEPARTAMENTO' => 'B'),
            array('NOMBRE' =>'Beryl', 'APELLIDOS' =>'McGeever', 'DEPARTAMENTO' => 'B'),
            array('NOMBRE' =>'Latashia', 'APELLIDOS' =>'Elders', 'DEPARTAMENTO' => 'C'),
            array('NOMBRE' =>'Betsey', 'APELLIDOS' =>'Paskins', 'DEPARTAMENTO' => 'D'),
            array('NOMBRE' =>'Ravi', 'APELLIDOS' =>'Balsellie', 'DEPARTAMENTO' => 'D'),
            array('NOMBRE' =>'Giuditta', 'APELLIDOS' =>'Connett', 'DEPARTAMENTO' => 'C'),
            array('NOMBRE' =>'Linnet', 'APELLIDOS' =>'Size', 'DEPARTAMENTO' => 'B'),
            array('NOMBRE' =>'Della', 'APELLIDOS' =>'Penk', 'DEPARTAMENTO' => 'B'),
            array('NOMBRE' =>'Ricardo','APELLIDOS' =>'Pettitt', 'DEPARTAMENTO' => 'A'),
        ];

        employee::insert($dataEmployee);
    }
}
