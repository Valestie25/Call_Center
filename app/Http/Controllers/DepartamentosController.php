<?php

namespace App\Http\Controllers;

use App\Models\Departamentos;
use Facade\FlareClient\Http\Response;
use Illuminate\Http\Request;

class DepartamentosController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $datos['departamentos']=Departamentos::paginate(100);
        return view('layouts.departamentos.indexDepartamento', $datos);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('layouts.departamentos.createDepartamento');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
        $campos =[
            'nombre_departamento' => 'required|string|max:255',
            'empleados_max' => 'required|int|max:100',
        ];

        $mensaje=[
            'required'=>'El :attribute es requerido'
        ];

        $this->validate($request, $campos, $mensaje);

        $datosDepartamentos = request()->except('_token');
        Departamentos::insert($datosDepartamentos);
        
    }
    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Departamentos  $departamentos
     * @return \Illuminate\Http\Response
     */
    public function show(Departamentos $departamentos)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Departamentos  $departamentos
     * @return \Illuminate\Http\Response
     */
    public function edit(Departamentos $departamentos)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Departamentos  $departamentos
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Departamentos $departamentos)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Departamentos  $departamentos
     * @return \Illuminate\Http\Response
     */
    public function destroy(Departamentos $departamentos)
    {
        //
    }
}
