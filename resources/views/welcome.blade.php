<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <script src="https://kit.fontawesome.com/58f26f20b0.js" crossorigin="anonymous"></script>
    <!--Tailwind CSS-->
    <link rel="stylesheet" href="{{ asset('css/app.css')}}">
    <title>Document</title>
</head>
<body>
    <div class="flex flex-wrap py-2">
        <div class="w-full px-4">
            <nav class="relative flex flex-wrap items-center justify-between px-2 py-3 bg-red-800 rounded">
                <div class="container px-4 mx-auto flex flex-wrap items-center justify-between">
                    <div class="w-full relative flex justify-between lg:w-auto px-4 lg:static lg:block lg:justify-start">
                        <a class="text-sm font-bold leading-relaxed inline-block mr-4 py-2 whitespace-nowrap uppercase text-white" href="#welcome">
                        Call Center Managment
                        </a>
                    </div>
                </div>
            </nav>
        </div>
    </div>
<!-- SIDEBAR NAVIGATION -->
    <div class="flex flex-wrap px-4">
        <div class="fixed  h-full bg-gray-300 rounded px-4">
            <nav class="flex flex-col justify-center items-center text-left px-2">
            <ul class=" text-gray-800 w-full">
                <li class="hover:underline hover:text-white border-b-2 border-gray-600 border-opacity-50 py-5 px-5">
                <a href="#slider">Departamento A</a>
                </li>
                <li class="hover:underline hover:text-white  border-b-2 border-gray-600 border-opacity-50 py-5 px-5">
                <a href="#about">Departamento B</a>
                </li>
                <li class="hover:underline hover:text-white border-b-2 border-gray-600 border-opacity-50 py-5 px-5">
                <a href="#menu">Departamento C</a>
                </li>
                <li class="hover:underline hover:text-white border-b-2 border-gray-600 border-opacity-50 py-5 px-5">
                <a href="#">Departamento D</a>
                </li>
            </ul>
            
            <div class="text-xl my-6">
                <a class="p-4 hover:text-green-500 text-blue-700" href=""><i class="fab fa-facebook"></i></a>
                <a  class="p-4 hover:text-green-500 text-blue-300" href=""><i class="fab fa-twitter"></i></a>
                    <a  class="p-4 hover:text-green-500 text-red-700" href=""><i class="fab fa-instagram"></i></a>
                <a  class="p-4 hover:text-green-500 text-red-900" href=""><i class="fab fa-youtube"></i></a>
            </div>
            
            <div class="mt-10 mb-10 text-gray-400">
                <p class="text-xs tracking-wide">Copyright &copy; 2020</p> 
            </div>
            </nav>
        </div>
    </div>
</body>
</html>