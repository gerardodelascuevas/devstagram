<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Devstagram - @yield('titulo') </title>
    @vite('resources/css/app.css')
</head>
<body>
    <div class="container mx-auto flex justify-between items-center">
        <h1 class="text-3xl font-black"> Devstagram </h1>
        @auth
        <nav class='flex gap-2 items-center'>
            <a  class='font-bold uppercase text-gray-600 text-sm' href='#'>
                Hola <span> {{$user-> username }}</span>
            </a>
            <form method="POST" action="{{route('logout')}}">
                @csrf
                <button type="submit" class='font-bold uppercase text-gray-600 text-sm'> Cerrar Sesión </button>
            </form>
        </nav>
        @endauth
        @guest
            <nav class='flex gap-2 items-center'>
                <a  class='font-bold uppercase text-gray-600 text-sm' href='/login'> Login </a>
                <a class='font-bold uppercase text-gray-600 text-sm' href='/register'> Crear Cuenta </a>
            </nav>
        @endguest
    </div>

    <main class="container mx-auto mt-10">
        <h2 class='font-black text-center text-3xl mb-10'> @yield('titulo')</h2>
    </main>
    <div>
        @yield('contenido')
    </div>

    <footer class="mt-10 text-center p-5 text-gray-500 font-bold uppercase">
        DevStagram - Todos los derechos reservados
        {{ now()->year }}
    </footer>
</body>
</html>
