
@extends('layouts.template.plantilla')

@section('title','index Departamento')

@section('content')
<div class="mb-4">
    <div class="mt-4 ml-4 font-mono text-xl font-normal"> mostrar lista de departamentos</div>
    <a href="/departamento/create">
        <button  class="bg-white-50 duration-500 rounded-md hover:border-withLight-200 transform font-normal p-2 px-6 hover:bg-blueOff-400 hover:text-white-200 text-black-900">Crear daepartamento</button>
    </a>
</div>
<div class="mt-4 ml-4 font-mono text-xl font-normal bg-white-300 p-6 rounded-lg shadow-lg">
    mostrar lista de departamentos
    <div class="w-full h-auto text-center rounded-sm ">
        <div class="grid grid-cols-4 text-blueOff-600 bg-blueOff-200 rounded-tl-lg rounded-tr-lg">
            <div class="border-gray-700 border p-2 rounded-tl-lg">#</div>
            <div class="border-gray-700 border p-2 ">Nombre</div>
            <div class="border-gray-700 border p-2 ">Cantidad Maxima</div>
            <div class="border-gray-700 border p-2 rounded-tr-lg">Acciones</div>
        </div>

        <div> 
            @foreach ($departamentos as $departamento)
            <div class="grid grid-cols-4 bg-white-500">
                <div class="border-gray-700 border p-2">{{$departamento->id_departamento}}</div>
                <div class="border-gray-700 border p-2">{{$departamento->nombre_departamento}}</div>
                <div class="border-gray-700 border p-2">{{$departamento->empleados_max}}</div>
                <div class="border-gray-700 border p-2">Editar | Borrar</div>
            </div>
            @endforeach
        </div>
    </div>
</div>
@endsection