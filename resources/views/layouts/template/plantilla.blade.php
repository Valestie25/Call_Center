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
    <link rel="stylesheet" href="{{ asset('css/app.css')}}">
    <link rel="stylesheet" href="{{ asset('css/highcharts.css')}}">
    <title>@yield('title', 'Documento')</title>
</head>
<body class="bg-blue-50 h-full w-full relative font-sans">
    <!--HEADER-->
    <div class="static w-full">
        <div class=" items-center justify-between px-5 py-5">
            <div class="mx-5 items-center justify-between grid grid-cols-3 gap-2">
                <a class="text-lg font-bold mr-4 py-2 uppercase text-black-700 font-sans" href="/">
                Call Center Managment
                </a>
                <!-- This is an example component -->
                <div class="pt-2 relative mx-auto text-gray-600">
                    <input class="border-2 border-gray-300 bg-white h-10 px-5 pr-16 rounded-lg text-sm focus:outline-none"
                    type="search" name="search" placeholder="Search">
                    <button type="submit" class="absolute right-0 top-0 mt-5 mr-4">
                    <svg class="text-gray-600 h-4 w-4 fill-current" xmlns="http://www.w3.org/2000/svg"
                        xmlns:xlink="http://www.w3.org/1999/xlink" version="1.1" id="Capa_1" x="0px" y="0px"
                        viewBox="0 0 56.966 56.966" style="enable-background:new 0 0 56.966 56.966;" xml:space="preserve"
                        width="512px" height="512px">
                        <path
                        d="M55.146,51.887L41.588,37.786c3.486-4.144,5.396-9.358,5.396-14.786c0-12.682-10.318-23-23-23s-23,10.318-23,23  s10.318,23,23,23c4.761,0,9.298-1.436,13.177-4.162l13.661,14.208c0.571,0.593,1.339,0.92,2.162,0.92  c0.779,0,1.518-0.297,2.079-0.837C56.255,54.982,56.293,53.08,55.146,51.887z M23.984,6c9.374,0,17,7.626,17,17s-7.626,17-17,17  s-17-7.626-17-17S14.61,6,23.984,6z" />
                    </svg>
                    </button>
                </div>
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
        <div class="bg-withLight-100 ml-52 mt-5 w-5/6 h-5/6 p-6 fixed rounded-2xl overflow-y-scroll">
            <div class="text-lg font-semibold uppercase text-black-700">
                @yield('content') <!--Mejorar la pagina, animacion rara, colores Y HEADER-->
            </div>
        </div>
    </div>
</body>
</html>