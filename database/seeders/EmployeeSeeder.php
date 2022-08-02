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
            array('NOMBRE' =>'Darb', 'APELLIDOS' =>'Gramer'),
            array('NOMBRE' =>'Tana', 'APELLIDOS' =>'Oluwatoyin'),
            array('NOMBRE' =>'Beryl', 'APELLIDOS' =>'McGeever'),
            array('NOMBRE' =>'Latashia', 'APELLIDOS' =>'Elders'),
            array('NOMBRE' =>'Betsey', 'APELLIDOS' =>'Paskins'),
            array('NOMBRE' =>'Ravi', 'APELLIDOS' =>'Balsellie'),
            array('NOMBRE' =>'Giuditta', 'APELLIDOS' =>'Connett'),
            array('NOMBRE' =>'Linnet', 'APELLIDOS' =>'Size'),
            array('NOMBRE' =>'Della', 'APELLIDOS' =>'Penk'),
            array('NOMBRE' =>'Ricardo','APELLIDOS' =>'Pettitt'),
        ];

        employee::insert($dataEmployee);
    }
}
