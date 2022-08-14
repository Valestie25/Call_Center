@extends('layouts.template.plantilla')

@section('title','Departamento seccios')

@section('content')

<div class="-mb-4">
  <div class="mt-4 ml-4 font-mono text-xl font-normal">Departamento B</div>
  <div class="text-right w-full py-6">
      <div class="inline-flex">
          <a class="flex " href="seccion1">
              <button id="map" class="bg-white-50 sticky duration-500 rounded-md hover:border-withLight-200 transform h-14 text-sm font-normal py-2 px-4 hover:bg-blueOff-400 hover:text-white-200 text-black-900">
                  Mapa de la zona
              </button>
          </a>
      </div>
  </div>
</div>
{{-- Inicio de SVG --}}
<div class="bg-white-50 py-2 rounded-md px-24">
  <div class = "grid grid-cols-4 gap-4 h-44" >
    <button class="m-20 cursor-pointer"  id="delete-btn" >
        <i class="text-6xl text-blueLight-600 fa-solid fa-user"></i>
      <div id="namecontainer"> Marcos </div>
    </button>
    <button class="m-20 cursor-pointer"  id="delete-btn" >
      <i class="text-6xl text-blueLight-600 fa-solid fa-user"></i>
      <div id="namecontainer"> Marcos </div>
    </button>
    <button class="m-20 cursor-pointer"  id="delete-btn" >
      <i class="text-6xl text-blueLight-600 fa-solid fa-user"></i>
      <div id="namecontainer"> Marcos </div>
    </button>
    <button class="m-20 cursor-pointer"  id="delete-btn" >
      <i class="text-6xl text-blueLight-600 fa-solid fa-user"></i>
      <div id="namecontainer"> Marcos </div>
    </button>
  </div>
  <div class="bg-white-700 rounded-md w-full h-20 items-center"></div>
  <div class = "grid grid-cols-4 gap-4 h-44" >
    <button class="m-20 cursor-pointer"  id="delete-btn" >
        <i class="text-6xl text-blueLight-600 fa-solid fa-user"></i>
      <div id="namecontainer"> Marcos </div>
    </button>
    <button class="m-20 cursor-pointer"  id="delete-btn" >
      <i class="text-6xl text-blueLight-600 fa-solid fa-user"></i>
      <div id="namecontainer"> Marcos </div>
    </button>
    <button class="m-20 cursor-pointer"  id="delete-btn" >
      <i class="text-6xl text-blueLight-600 fa-solid fa-user"></i>
      <div id="namecontainer"> Marcos </div>
    </button>
    <button class="m-20 cursor-pointer"  id="delete-btn" >
      <i class="text-6xl text-blueLight-600 fa-solid fa-user"></i>
      <div id="namecontainer"> Marcos </div>
    </button>
  </div>
  <div class="bg-white-700 rounded-md w-full h-20 items-center"></div>
  <div class = "grid grid-cols-4 gap-4 h-44" >
    <button class="m-20 cursor-pointer"  id="delete-btn" >
        <i class="text-6xl text-blueLight-600 fa-solid fa-user"></i>
      <div id="namecontainer"> Marcos </div>
    </button>
    <button class="m-20 cursor-pointer"  id="delete-btn" >
      <i class="text-6xl text-blueLight-600 fa-solid fa-user"></i>
      <div id="namecontainer"> Marcos </div>
    </button>
    <button class="m-20 cursor-pointer"  id="delete-btn" >
      <i class="text-6xl text-blueLight-600 fa-solid fa-user"></i>
      <div id="namecontainer"> Marcos </div>
    </button>
    <button class="m-20 cursor-pointer"  id="delete-btn" >
      <i class="text-6xl text-blueLight-600 fa-solid fa-user"></i>
      <div id="namecontainer"> Marcos </div>
    </button>
  </div>
  <div class="bg-white-700 rounded-md w-full h-20 items-center"></div>
</div>

<div class="absolute inset-0 hidden justify-center items-center" id="overlay">
  <div class="bg-gray-200 max-w-sm py-2 px-3 rounded shadow-xl text-gray-800">
      <div class="flex justify-between items-center">
          <h4 class="text-lg font-bold">INFORMACION DEL EMPLEADO</h4>
          <svg class="h-6 w-6 cursor-pointer p-1 hover:bg-gray-300 rounded-full" id="close-modal" fill="currentColor" viewBox="0 0 20 20">
              <path fill-rule="evenodd"
                  d="M4.293 4.293a1 1 0 011.414 0L10 8.586l4.293-4.293a1 1 0 111.414 1.414L11.414 10l4.293 4.293a1 1 0 01-1.414 1.414L10 11.414l-4.293 4.293a1 1 0 01-1.414-1.414L8.586 10 4.293 5.707a1 1 0 010-1.414z"
                  clip-rule="evenodd"></path>
          </svg>
      </div>
      <div class="mt-2 text-sm">
          <p class="font-bold">Nombre:</p>
          <p>Shawn</p>
          <p class="font-bold">Apellido:</p>
          <p>Mendez</p>
          <p class="font-bold">Ultima llamada:</p>
          <p>Hace 5 min</p>
          <p class="font-bold">Tiempo ultima llamada:</p>
          <p>Hace 3 min</p>
          <p class="font-bold">Tiempo en llamada en curso:</p>
          <p>30 seg</p>
          <p class="font-bold">Tiempo inactivo:</p>
          <p>30 min</p>
      </div>
     
  </div>
</div>
<script>
  window.addEventListener('DOMContentLoaded', () =>{
      const overlay = document.querySelector('#overlay')
      const delBtn = document.querySelector('#delete-btn')
      const closeBtn = document.querySelector('#close-modal')

      const toggleModal = () => {
          overlay.classList.toggle('hidden')
          overlay.classList.toggle('flex')
      }

      delBtn.addEventListener('click', toggleModal)

      closeBtn.addEventListener('click', toggleModal)
  })

</script>
@endsection