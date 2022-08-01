<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\call_data;

class CallsDataSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    /** INSERTAR FECHA ACTUAL */
    public function run()
    {
        $dataCallsInformation = [
            array('NUMERO_DE_LLAMADAS' => 0, 'NUMERO_DE_LLAMADAS_EN_ESPERA' => 1),
            array('NUMERO_DE_LLAMADAS' => 1, 'NUMERO_DE_LLAMADAS_EN_ESPERA' => 2),
            array('NUMERO_DE_LLAMADAS' => 2, 'NUMERO_DE_LLAMADAS_EN_ESPERA' => 3),
            array('NUMERO_DE_LLAMADAS' => 3, 'NUMERO_DE_LLAMADAS_EN_ESPERA' => 4),
            array('NUMERO_DE_LLAMADAS' => 4, 'NUMERO_DE_LLAMADAS_EN_ESPERA' =>5),
            array('NUMERO_DE_LLAMADAS' => 5, 'NUMERO_DE_LLAMADAS_EN_ESPERA' =>6),
            array('NUMERO_DE_LLAMADAS' => 7, 'NUMERO_DE_LLAMADAS_EN_ESPERA' =>7),
            array('NUMERO_DE_LLAMADAS' => 8, 'NUMERO_DE_LLAMADAS_EN_ESPERA' =>8),
            array('NUMERO_DE_LLAMADAS' => 9, 'NUMERO_DE_LLAMADAS_EN_ESPERA' =>9),
            array('NUMERO_DE_LLAMADAS' => 10,'NUMERO_DE_LLAMADAS_EN_ESPERA' =>10),
        ];

        call_data::insert($dataCallsInformation);
    }
}
