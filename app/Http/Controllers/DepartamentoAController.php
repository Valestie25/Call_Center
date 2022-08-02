<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use  App\models\call_data;
use  App\models\calls;

class DepartamentoAController extends Controller
{
    public function __invoke(){

        $llamadas = call_data::all();

        $cantidadDeLlamadasPorHora = [];
        foreach ($llamadas as $llamada){
            $cantidadDeLlamadasPorHora[] = ['name' => $llamada ['NUMERO_DE_LLAMADAS'], 'y' => floatval($llamada ['NUMERO_DE_LLAMADAS_EN_ESPERA'])];
        }

        $duracionPromedioLlamadas = [];
        foreach ($llamadas as $llamada){
            $duracionPromedioLlamadas[] = ['name' => $llamada ['NUMERO_DE_LLAMADAS'], 'y' => floatval($llamada ['NUMERO_DE_LLAMADAS_EN_ESPERA'])];
        }

        return view('layouts.departamentoA', ["dataCallsInformation" => json_encode($cantidadDeLlamadasPorHora),
                    "dataCalls" => json_encode($duracionPromedioLlamadas)]);
    }
}
