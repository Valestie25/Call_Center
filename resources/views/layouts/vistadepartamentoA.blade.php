<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <script src="https://kit.fontawesome.com/58f26f20b0.js" crossorigin="anonymous"></script>
    <!--HighCharts-->
    <script src="https://code.highcharts.com/highcharts.js"></script>
    <script src="https://code.highcharts.com/modules/exporting.js"></script>
    <script src="https://code.highcharts.com/modules/export-data.js"></script>
    <script src="https://code.highcharts.com/modules/accessibility.js"></script>
    <!--Tailwind CSS-->
    <link rel="stylesheet" href="{{ asset('css/app.css')}}">
    <link rel="stylesheet" href="{{ asset('css/highcharts.css')}}">
    <title>@yield('title', 'Documento')</title>
    <style>
html,div {width: 100%;
    height: 100%;
  }
svg{
  margin:0 auto; 
}

</style>
</head>
<body class="bg-withLight-400 w-full h-full">
        <div>Vista dieno 
        <svg version="1.1"
     baseProfile="full"
     width="100%" height="100%" 
     xmlns="http://www.w3.org/2000/svg">
  
  <circle id="employee1" cx="150" cy="100" r="30" fill="blue" />
  <circle id="employee2" cx="350" cy="100" r="30" fill="blue" />
  <circle id="employee3" cx="550" cy="100" r="30" fill="blue" />
  <circle id="employee4" cx="750" cy="100" r="30" fill="blue" />
  
  <style>
    rect {
     margin-top:100px;
    }
    
  </style>
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
 <!-- 
<img
    src="/svg/departamento.svg"
    alt="diagrama del departamento"
    />
  !-->
</body>

</html>