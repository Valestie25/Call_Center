@extends('layouts.template.plantilla')

@section('title','Departamento seccios')

@section('content')

<div class="static">Mapa del departamento
  <div class="text-center w-full">
    <div class="inline-flex m-2">
        <a class="flex " href="departamentoA">
          <button id="map" class="bg-white sticky duration-500 border-2 rounded-md border-black-400 hover:border-withLight-200 w-24 transform hover:translate-x-1 h-10 text-2xl hover:bg-black-400 hover:text-withLight-200 text-black-400">
              <i class="fa-solid fa-chart-column"></i>
            </button>
        </a>
    </div>
</div>

{{-- Inicio de SVG --}}
<div class = "grid grid-cols-4 gap-y-5" >
  <button class="m-20 cursor-pointer"  id="delete-btn" >
    <a class="rounded-full px-12 py-12 bg-blueLight-600" style="display:flex;">
    <a id="namecontainer"> Marcos </a>
       </a>
  </button>
 <button class="m-20 cursor-pointer"  id="delete-btn">
 <a class="rounded-full px-12 py-12 bg-blueLight-600" style="display:flex;">
    <a id="namecontainer"> Marcos </a>
       </a>
  </button>
  <button class="m-20 cursor-pointer"  id="delete-btn" >
  <a class="rounded-full px-12 py-12 bg-green-600" style="display:flex;">
    <a id="namecontainer"> Marcos </a>
       </a>
       </button>
       <button class="m-20 cursor-pointer"  id="delete-btn" >
  <a class="rounded-full px-12 py-12 bg-blueLight-600" style="display:flex;">
    <a id="namecontainer"> Marcos </a>
       </a>
       </button>
</div>
<div class="bg-withLight-700 rounded-md w-5/6 h-20 items-center ml-20"></div>
<div class = "grid grid-cols-4 gap-y-8">
<button class="m-20 cursor-pointer"  id="delete-btn" >
  <a class="rounded-full px-12 py-12 bg-red-600" style="display:flex;">
    <a id="namecontainer"> Marcos </a>
       </a>
       </button>
       <button class="m-20 cursor-pointer"  id="delete-btn" >
  <a class="rounded-full px-12 py-12 bg-blueLight-600" style="display:flex;">
    <a id="namecontainer"> Marcos </a>
       </a>
       </button>
       <button class="m-20 cursor-pointer"  id="delete-btn" >
  <a class="rounded-full px-12 py-12 bg-blueLight-600" style="display:flex;">
    <a id="namecontainer"> Marcos </a>
       </a>
       </button>
       <button class="m-20 cursor-pointer"  id="delete-btn" >
  <a class="rounded-full px-12 py-12 bg-blueLight-600" style="display:flex;">
    <a id="namecontainer"> Marcos </a>
       </a>
       </button>
</div>
<div class="bg-withLight-700 rounded-md w-5/6 h-20 items-center ml-20"></div>
<div class = "grid grid-cols-4 gap-y-8">
<button class="m-20 cursor-pointer"  id="delete-btn" >
  <a class="rounded-full px-12 py-12 bg-blueLight-600" style="display:flex;">
    <a id="namecontainer"> Marcos </a>
       </a>
       </button>
       <button class="m-20 cursor-pointer"  id="delete-btn" >
  <a class="rounded-full px-12 py-12 bg-blueLight-600" style="display:flex;">
    <a id="namecontainer"> Marcos </a>
       </a>
       </button>
       <button class="m-20 cursor-pointer"  id="delete-btn" >
  <a class="rounded-full px-12 py-12 bg-blueLight-600" style="display:flex;">
    <a id="namecontainer"> Marcos </a>
       </a>
       </button>
       <button class="m-20 cursor-pointer"  id="delete-btn" >
  <a class="rounded-full px-12 py-12 bg-blueLight-600" style="display:flex;">
    <a id="namecontainer"> Marcos </a>
       </a>
       </button>
</div>
<div class="bg-withLight-700 rounded-md w-5/6 h-20 items-center ml-20"></div>
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