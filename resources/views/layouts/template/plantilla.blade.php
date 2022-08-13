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
    <script src="{{ mix('js/app.js')}}"></script>
    <!--Tailwind CSS-->
    <link rel="stylesheet" href="https://unpkg.com/flowbite@1.4.4/dist/flowbite.min.css" />
    <link href="{{ asset('/public/css/app.css')}}" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('css/app.css')}}">
    <link rel="stylesheet" href="{{ asset('css/highcharts.css')}}">
    <title>@yield('title', 'Documento')</title>
</head>
<body class="bg-redHard-400 h-full w-full font-sans">
    <!--HEADER-->
    <div class="static w-full">
        <div class=" items-center justify-between px-2 py-2">
            <div class="mx-5 items-center justify-between grid grid-cols-3 gap-2">
                <a class="text-lg font-bold mr-4 py-2 uppercase text-black-700 font-sans" href="/dashboard">
                Call Center Managment
                </a>
            </div>
        </div>
    </div>
    <!-- SIDEBAR NAVIGATION -->
    <div class="fixed h-full">
        <div class=" flex h-full flex-col">
            <a class="btn text-black-700 hover:bg-withLight-100 hover:shadow-lg hover:rounded-r-2xl hover:shadow-black-500/10 py-5 px-5 font-sans" href="departamentoA">Departamento A
                <i class="text-gray-400 fa-solid fa-chevron-right ml-5"></i>
            </a>
            <a class="btn text-black-700 hover:bg-withLight-100 hover:shadow-lg hover:rounded-r-2xl hover:shadow-black-500/10 py-5 px-5 font-sans" href="departamentoB">Departamento B
                <i class="text-gray-400 fa-solid fa-chevron-right ml-5"></i>
            </a>
            <a class="btn text-black-700 hover:bg-withLight-100 hover:shadow-lg hover:rounded-r-2xl hover:shadow-black-500/10 py-5 px-5 font-sans" href="departamentoC">Departamento C
                <i class="text-gray-400 fa-solid fa-chevron-right ml-5"></i>
            </a>
            <a class="btn text-black-700 hover:bg-withLight-100 hover:shadow-lg hover:rounded-r-2xl hover:shadow-black-500/10 py-5 px-5 font-sans" href="departamentoD">Departamento D
                <i class="text-gray-400 fa-solid fa-chevron-right ml-5"></i>
            </a>
        </div>
    </div>
    <div class="w-full h-full">
        <div class="bg-red-200 ml-52 mt-5 w-5/6 h-5/6 p-6 fixed rounded-2xl overflow-y-scroll">
            <div class="text-lg font-semibold uppercase text-black-700">
                @yield('content') <!--Mejorar la pagina, animacion rara, colores Y HEADER-->
            </div>
        </div>
    </div>
</body>
</html>