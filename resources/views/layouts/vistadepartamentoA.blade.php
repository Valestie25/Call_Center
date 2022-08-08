@extends('layouts.template.plantilla')

@section('title','Departamento seccios')

@section('content')
<div class="static">Vista dieno
  <div class="text-center w-full">
    <div class="inline-flex m-2">
        <a class="flex " href="departamentoA">
          <button id="map" class="bg-white sticky duration-500 border-2 rounded-md border-black-400 hover:border-withLight-200 w-24 transform hover:translate-x-1 h-10 text-2xl hover:bg-black-400 hover:text-withLight-200 text-black-400">
              <i class="fa-solid fa-chart-column"></i>
            </button>
        </a>
    </div>
</div>
<div class = "grid grid-cols-4 gap-y-8">
  <div class="m-20">
    <a class="rounded-full px-14 py-12 bg-blueLight-600"></a>
  </div>
  <div class="m-20 ">
    <a class="rounded-full px-14 py-12 bg-blueLight-600"></a>
  </div>
  <div class="m-20 ">
    <a class="rounded-full px-14 py-12 bg-blueLight-600"></a>
  </div>
  <div class="m-20 ">
    <a class="rounded-full px-14 py-12 bg-blueLight-600"></a>
  </div>
</div>
<div class="bg-withLight-700 rounded-md w-5/6 h-24 items-center ml-20"></div>
<div class = "grid grid-cols-4 gap-y-8">
  <div class="m-20 ">
    <a class="rounded-full px-14 py-12 bg-blueLight-600"></a>
  </div>
  <div class="m-20 ">
    <a class="rounded-full px-14 py-12 bg-blueLight-600"></a>
  </div>
  <div class="m-20 ">
    <a class="rounded-full px-14 py-12 bg-blueLight-600"></a>
  </div>
  <div class="m-20 ">
    <a class="rounded-full px-14 py-12 bg-blueLight-600"></a>
  </div>
</div>
<div class="bg-withLight-700 rounded-md w-5/6 h-24 items-center ml-20"></div>
<div class = "grid grid-cols-4 gap-y-8">
  <div class="m-20 ">
    <a class="rounded-full px-14 py-12 bg-blueLight-600"></a>
  </div>
  <div class="m-20 ">
    <a class="rounded-full px-14 py-12 bg-blueLight-600"></a>
  </div>
  <div class="m-20 ">
    <a class="rounded-full px-14 py-12 bg-blueLight-600"></a>
  </div>
  <div class="m-20 ">
    <a class="rounded-full px-14 py-12 bg-blueLight-600"></a>
  </div>
</div>
<div class="bg-withLight-700 rounded-md w-5/6 h-24 items-center ml-20"></div>
</div>
 <!-- 
<img
    src="/svg/departamento.svg"
    alt="diagrama del departamento"
    />
  !-->
@endsection