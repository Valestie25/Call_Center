<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\DepartmentCCall;

class DepartamentoCController extends Controller
{
    public function __invoke()
    {
        $llamadasEspera = DepartmentCCall::select('TIEMPO_PROMEDIO_DE_ESPERA', 'HORA_DE_LLAMADAS')
        ->orderBy('ID_LLAMADAS', 'ASC')
        ->take(10)
        ->get();
        $llamadasCantidad = DepartmentCCall::select('CANTIDAD_PROMEDIO_DE_LLAMADAS', 'HORA_DE_LLAMADAS')
        ->orderBy('ID_LLAMADAS', 'ASC')
        ->take(10)
        ->get();
        $llamadasDuracion = DepartmentCCall::select('HORA_DE_LLAMADAS', 'DURACION_PROMEDIO_DE_LLAMADAS')
        ->orderBy('ID_LLAMADAS', 'ASC')
        ->take(10)
        ->get();

        $tiempoDeEsperaPromedio = [];
        foreach ($llamadasEspera as $espera) {
            $tiempoDeEsperaPromedio[] = ['name' => date($espera['HORA_DE_LLAMADAS']), 'y' => floatval($espera['TIEMPO_PROMEDIO_DE_ESPERA'])];
        }

        $cantidadDeLlamadasPorHora = [];
        foreach ($llamadasCantidad as $cantidad) {
            $cantidadDeLlamadasPorHora[] = ['name' => $cantidad['HORA_DE_LLAMADAS'], 'y' => floatval($cantidad['CANTIDAD_PROMEDIO_DE_LLAMADAS'])];
        }

        $duracionPromedioLlamadas = [];
        foreach ($llamadasDuracion as $duracion) {
            $duracionPromedioLlamadas[] = ['name' => date($duracion['HORA_DE_LLAMADAS']), 'y' => floatval($duracion['DURACION_PROMEDIO_DE_LLAMADAS'])];
        }

        return view('layouts.departamentoC', [
            "dataWaiting" => json_encode($tiempoDeEsperaPromedio),
            "dataCallsQuantity" => json_encode($cantidadDeLlamadasPorHora),
            "dataCallsDuration" => json_encode($duracionPromedioLlamadas),

        ]);
    }
}
