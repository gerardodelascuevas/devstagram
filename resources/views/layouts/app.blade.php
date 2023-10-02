<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Devstagram - @yield('titulo') </title>
    @vite('resources/css/app.css')
</head>
<body>
    <nav class='flex gap-2 items-center'>
        <a  class='font-bold uppercase text-gray-600 text-sm' href='/'> Principal </a>
        <a class='font-bold uppercase text-gray-600 text-sm' href='/register'> Crear Cuenta </a>
    </nav>

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
