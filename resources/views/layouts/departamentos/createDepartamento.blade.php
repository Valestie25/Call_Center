
@extends('layouts.template.plantilla')

@section('title','Crear Departamento')

@section('content')
<div class="mb-4">
    <div class="mt-4 ml-4 font-mono text-xl font-normal">Crear Departamento</div>
</div>
<div class="w-full h-auto mr-4 font-mono text-xl font-normal bg-white-100 border-white-100 p-4 border-2 rounded-lg shadow-lg">
    <div>create departamento</div>
    <div class="m-5">
        @if (count($errors)>0)
            <div class="bg-redHard-200 rounded-lg py-5 px-6 mb-4 text-base text-purple-700" role="alert">
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{$error}}</li>
                    @endforeach
                </ul>
            </div>
        @endif
        <form action={{url('/departamento')}} method="post" enctype="multipart/form-data">
            @csrf
            
            <label for="NombreDepartamento" class=""> Nombre del departamento</label>
            <br  class="m-2">
            <input type="text" name="nombre_departamento" id="nombre_departamento" class="bg-white-100 border-gray-300 border-2 rounded-sm">
            
            <br class="m-2">
            <label for="EmpleadosMax" class="">Cantidad total de empleados</label>
            <br class="m-2">
            <input type="number" name="empleados_max" id="empleados_max" class="bg-white-100 border-gray-300 border-2 rounded-sm">
            <br class="m-2">
            <a type="submit" name="Enviar" id="Enviar">
                <button  class="bg-white-50 duration-500 rounded-md hover:border-withLight-200 transform font-normal p-2 px-6 hover:bg-blueOff-400 hover:text-white-200 text-black-900">Guardar</button>
            </a>
            <br>
        </form>
        <a href="/departamento">
            <button  class="bg-white-50 duration-500 rounded-md hover:border-withLight-200 transform font-normal p-2 px-6 hover:bg-blueOff-400 hover:text-white-200 text-black-900">Regresar</button>
        </a>
    </div>
</div>
@endsection