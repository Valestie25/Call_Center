@extends('layouts.template.plantilla')

@section('title','Departamento seccios')

@section('content')
<div class="static">Vista dieno
  <div class="grid grid-cols-4 gap-y-8">
    <div class="m-20">
      <button class="rounded-full px-6 py-12 bg-blueLight-600" onclick="mostrarInformacion()" onclick="hideInformation()">BOTON</i></button>

      <div id="botonCerrar"  class="bg-blueLight-600"></div>

      <div id="nombreEmpleado1" class="bg-blueLight-600">
      </div>
      <div id="apellidoEmpleado1" class="bg-blueLight-600"></div>

    </div>
    <div class="m-20 ">
      <button class="rounded-full px-6 py-12 bg-blueLight-600">BOTON</i></button>
    </div>
    <div class="m-20 ">
      <button class="rounded-full px-6 py-12 bg-blueLight-600">BOTON</i></button>
    </div>
    <div class="m-20 ">
      <button class="rounded-full px-6 py-12 bg-blueLight-600">BOTON</i></button>
    </div>
  </div>
  <div class="bg-withLight-700 rounded-md w-5/6 h-24 items-center ml-20"></div>
  <div class="grid grid-cols-4 gap-y-8">
    <div class="m-20 ">
      <button class="rounded-full px-6 py-12 bg-blueLight-600">BOTON</i></button>
    </div>
    <div class="m-20 ">
      <button class="rounded-full px-6 py-12 bg-blueLight-600">BOTON</i></button>
    </div>
    <div class="m-20 ">
      <button class="rounded-full px-6 py-12 bg-blueLight-600">BOTON</i></button>
    </div>
    <div class="m-20 ">
      <button class="rounded-full px-6 py-12 bg-blueLight-600">BOTON</i></button>
    </div>
  </div>
  <div class="bg-withLight-700 rounded-md w-5/6 h-24 items-center ml-20"></div>
  <div class="grid grid-cols-4 gap-y-8">
    <div class="m-20 ">
      <button class="rounded-full px-6 py-12 bg-blueLight-600">BOTON</i></button>
    </div>
    <div class="m-20 ">
      <button class="rounded-full px-6 py-12 bg-blueLight-600">BOTON</i></button>
    </div>
    <div class="m-20 ">
      <button class="rounded-full px-6 py-12 bg-blueLight-600" onclick="mostrarInformacion()">BOTON</i></button>

      <div id="nombreEmpleado11" class="bg-blueLight-600"></div>
      <div id="apellidoEmpleado11" class="bg-blueLight-600"></div>

    </div>
    <div class="m-20 ">
      <button class="rounded-full px-6 py-12 bg-blueLight-600">BOTON</button>

    </div>
  </div>
  <div class="bg-withLight-700 rounded-md w-5/6 h-24 items-center ml-20"></div>
</div>

<script>
  function mostrarInformacion() {
    var $obtenerNombre = document.getElementById("nombreEmpleado1");
    var $obtenerApellido = document.getElementById("apellidoEmpleado1");
    var $cerrar = document.getElementById("botonCerrar");

    $obtenerNombre.innerHTML = "NOMBRE: Marjorie";
    $obtenerApellido.innerHTML = "APELLIDO: Marjorie";
    $cerrar.innerHTML = "X";
  }

  function hideInformation() {
    //PONER UNA FUNCION QUE OCULTE LA INFORMACION 
  }

  /* function clickBoton(){
    setInterval(() => {
      document.getElementById("boton1");
    }, 1000);
  } */
</script>
<!-- 
<img
    src="/svg/departamento.svg"
    alt="diagrama del departamento"
    />
  !-->
@endsection