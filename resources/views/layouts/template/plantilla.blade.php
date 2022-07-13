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
</head>
<body>
<div class=" bg-withLight-400 h-full w-full">
    <!--HEADER-->
    <div class="w-full border-b-3 border-withLight-400">
        <div class="relative flex flex-wrap items-center justify-between px-2 py-2 bg-withLight-100">
            <div class=" mx-5 flex flex-wrap items-center justify-between">
                <a class="text-lg font-bold mr-4 py-2 uppercase text-black-700" href="/">
                Call Center Managment
                </a>
            </div>
        </div>
    </div>
    <!-- SIDEBAR NAVIGATION -->
    <div class="bg-withLight-200 w-full h-full flex">
    <div class="flex-initial">
        <div class=" h-full bg-withLight-100 border-r-3 border-withLight-400">
            <nav class="justify-center items-center text-left">
                <ul class="w-full">
                    <li class="py-5">
                        <a class="text-black-700 hover:bg-withLight-400 hover:shadow-lg hover:shadow-black-500/10 py-5 px-5 transition duration-300 ease-in-out" href="departamentoA">Departamento A
                            <i class="text-gray-400 fa-solid fa-chevron-right ml-5"></i>
                        </a>
                    </li>
                    <li class="py-5">
                        <a class="text-black-700 hover:bg-withLight-400 hover:shadow-lg  hover:shadow-black-500/10 py-5 px-5 transition duration-300 ease-in-out" href="departamentoB">Departamento B
                            <i class="text-gray-400 fa-solid fa-chevron-right ml-5"></i>
                        </a>
                        
                    </li>
                    <li class="py-5">
                        <a class="text-black-700 hover:bg-withLight-400 hover:shadow-lg  hover:shadow-black-500/10 py-5 px-5 transition duration-300 ease-in-out" href="departamentoC">Departamento C
                            <i class="text-gray-400 fa-solid fa-chevron-right ml-5"></i>
                        </a>
                    </li>
                    <li class="py-5">
                        <a class="text-black-700 hover:bg-withLight-400 hover:shadow-lg  hover:shadow-black-500/10 py-5 px-5 transition duration-300 ease-in-out" href="departamentoD">Departamento D
                            <i class="text-gray-400 fa-solid fa-chevron-right ml-5"></i>
                        </a>
                    </li>
                </ul>
            </nav>
        </div>
    </div> 
    <div class="w-full">
        @yield('content')
    </div>
    </div>

</div>
</body>
</html>