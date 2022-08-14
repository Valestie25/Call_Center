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
    <link rel="stylesheet" href="{{ asset('css/app.css')}}">
    <link rel="stylesheet" href="{{ asset('/public/css/app.css')}}">
    <link rel="stylesheet" href="{{ asset('css/highcharts.css')}}">
    <title>@yield('title', 'Documento')</title>
</head>
<body class="bg-gray-100  h-full w-full font-sans ">
    <!--HEADER-->
    <header class="ml-52">
        <!-- Navbar -->
        <nav class="shadow py-2 relative flex items-center w-full justify-between h-20">
          <div class="px-6 w-full flex flex-wrap items-center justify-between">
            <div class="navbar-collapse collapse grow items-center" id="navbarSupportedContentY">
                <ul class="navbar-nav mr-auto lg:flex lg:flex-row">
                    <li class="nav-item">
                      <a class="nav-link block pr-2 text-black text-xl p-2 transition duration-150 ease-in-out" href="dashboard" data-mdb-ripple="true" data-mdb-ripple-color="light">Call Center Management</a>
                    </li>
                </ul>
            </div>
          </div>
        </nav>
        <!-- Navbar -->
      </header>
    <!-- SIDEBAR NAVIGATION -->
    <div class="bg-white-900 pr-4 fixed top-0 h-full p-4 shadow">
        <nav class="static">
            <ul class="flex h-full flex-col">
                <li>
                    <a class="nav-link pt-6 block pr-2 text-black hover:text-gray-700 mb-5 focus:text-gray-700 text-lg p-2 transition duration-150 ease-in-out"></a>
                </li>
                <a class="hover:text-black text-black-900 hover:bg-redHard-500 hover:shadow-lg hover:rounded-r-2xl hover:shadow-black-500/10 py-5 px-5 font-sans" href="departamentoA">Departamento A
                    <i class="text-gray-400 fa-solid fa-chevron-right ml-5"></i>
                </a>
                <a class="btn text-black-900 hover:bg-white-900 hover:shadow-lg hover:rounded-r-2xl hover:shadow-black-500/10 py-5 px-5 font-sans" href="departamentoB">Departamento B
                    <i class="text-gray-400 fa-solid fa-chevron-right ml-5"></i>
                </a>
                <a class="btn text-black-900 hover:bg-white-900 hover:shadow-lg hover:rounded-r-2xl hover:shadow-black-500/10 py-5 px-5 font-sans" href="departamentoC">Departamento C
                    <i class="text-gray-400 fa-solid fa-chevron-right ml-5"></i>
                </a>
                <a class="btn text-black-900 hover:bg-white-900 hover:shadow-lg hover:rounded-r-2xl hover:shadow-black-500/10 py-5 px-5 font-sans" href="departamentoD">Departamento D
                    <i class="text-gray-400 fa-solid fa-chevron-right ml-5"></i>
                </a>
            </ul>
        </nav>
    </div>
    <div class="ml-52 p-4 pl-10 ">
        <div class="text-lg font-semibold uppercase text-black-900">
            @yield('content') <!--Mejorar la pagina, animacion rara, colores Y HEADER-->
        </div>
    </div>
</body>
</html>