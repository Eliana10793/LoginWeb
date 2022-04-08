<!DOCTYPE html>

<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>@yield('title')-Laravel</title>
  <link href="https://cdnjs.cloudflare.com/ajax/libs/tailwindcss/2.0.1/tailwind.min.css" rel="stylesheet">
</head>

<body class="bg-gray-100 text-gray-800">
<nav class="flex py-5 bg-indigo-500 text-white">
    <div class="w-1/2 px-12 mr-auto">
        <p class="text-2xl font-bold">Topicos</p>
    </div>
    <ul class="w-1/2 px-6 ml-auto flex justify-end pt-1">
        @if(auth()->check())
        <li>
        <p class="text-ml">Bienvenido <b>{{auth()->user()->name}}</b></p>
        </li>  
        <li>
            <a href="{{route('login.destroy')}}" class="font-bold hover:bg-indigo-700 py-3 px-4 rounded-md">Cerrar Sesion</a>
        </li>
        @else
        <li>
            <a href="{{route('login.index')}}" class="font-semibold hover:bg-indigo-700 py-3 px-4 rounded-md">Login</a>
        </li>
        <li>
            <a href="{{route('registro.index')}}" class="font-semibold hover:bg-indigo-700 py-3 px-4 rounded-md">Registar</a>
        </li>
        @endif
    </ul>
</nav>   
@yield('content') 
</body>

</html>