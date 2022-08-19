<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class Empleados extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('empleados')->insert([
            'nombre_empleado' => 'Marcos',
            'apellido_paterno' => 'Avila',
            'apellido_materno' => 'Vargas',
            'id_departamento' => '1'
        ]);
    }
}
