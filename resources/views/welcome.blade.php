<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <!--Tailwind CSS-->
    <link rel="stylesheet" href="{{ asset('css/app.css')}}">
    <title>Document</title>
</head>
<body>
    <template>
  <button class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded">
    <slot/>
  </button>
</template>
</div>
</body>
</html>