<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\models\call;

class CallsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $dataCalls = [
            array('FECHA_DE_LLAMADAS' =>'2022/07/01', 'DURACION_DE_LLAMADAS' => 1),
            array('FECHA_DE_LLAMADAS' =>'2022/07/02', 'DURACION_DE_LLAMADAS' => 2),
            array('FECHA_DE_LLAMADAS' =>'2022/07/03', 'DURACION_DE_LLAMADAS' => 3),
            array('FECHA_DE_LLAMADAS' =>'2022/07/04', 'DURACION_DE_LLAMADAS' => 4),
            array('FECHA_DE_LLAMADAS' =>'2022/07/05', 'DURACION_DE_LLAMADAS' =>5),
            array('FECHA_DE_LLAMADAS' =>'2022/07/06', 'DURACION_DE_LLAMADAS' =>6),
            array('FECHA_DE_LLAMADAS' =>'2022/07/07', 'DURACION_DE_LLAMADAS' =>7),
            array('FECHA_DE_LLAMADAS' =>'2022/07/08', 'DURACION_DE_LLAMADAS' =>8),
            array('FECHA_DE_LLAMADAS' =>'2022/07/09', 'DURACION_DE_LLAMADAS' =>9),
            array('FECHA_DE_LLAMADAS' =>'2022/07/10','DURACION_DE_LLAMADAS' =>10),
        ];

        call::insert($dataCalls);
    }
}
