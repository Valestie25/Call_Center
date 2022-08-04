@extends('layouts.template.plantilla')

@section('title','Departamento seccios')

@section('content')
<div class="static">Vista dieno
  <div class="h-screen">
    <svg version="1.1"
      baseProfile="full"
      class="w-full h-full"
      xmlns="http://www.w3.org/2000/svg">
    
      <circle class="hover:bg-withLight-400 hover:shadow-lg hover:scale-110 focus:outline-none" id="employee1" cx="150" cy="100" r="30"/>
      <circle id="employee2" cx="350" cy="100" r="30" fill="red" />
      <circle id="employee3" cx="550" cy="100" r="30" fill="blue" />
      <circle id="employee4" cx="750" cy="100" r="30" fill="blue" />
      
      <rect x="60" y="140" width="800" height="100" style="padding-bottom:200px;" fill="lightgray" />


      <circle id="employee5" cx="150" cy="300" r="30" fill="blue" />
      <circle id="employee6" cx="350" cy="300" r="30" fill="blue" />
      <circle id="employee7" cx="550" cy="300" r="30" fill="blue" />
      <circle id="employee8" cx="750" cy="300" r="30" fill="blue" />

      <rect x="60" y="350" width="800" height="100" style="padding-bottom:200px;" fill="lightgray" />

      
      <circle id="employee9" cx="150" cy="500" r="30" fill="blue" />
      <circle id="employee10" cx="350" cy="500" r="30" fill="blue" />
      <circle id="employee11" cx="550" cy="500" r="30" fill="blue" />
      <circle id="employee12" cx="750" cy="500" r="30" fill="blue" />

      <rect x="60" y="550" width="800" height="100" style="padding-bottom:200px;" fill="lightgray" />

      
      <circle id="employee13" cx="150" cy="700" r="30" fill="blue" />
      <circle id="employee14" cx="350" cy="700" r="30" fill="blue" />
      <circle id="employee15" cx="550" cy="700" r="30" fill="blue" />
      <circle id="employee16" cx="750" cy="700" r="30" fill="blue" />

      <rect x="60" y="750" width="800" height="100" style="padding-bottom:200px;" fill="lightgray" />
    </svg>
  </div>
</div>
 <!-- 
<img
    src="/svg/departamento.svg"
    alt="diagrama del departamento"
    />
  !-->
@endsection