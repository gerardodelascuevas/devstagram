@extends('layouts.app')

@section('titulo')
    Inicia Sesión en devstagram!

@endsection


@section('contenido')
    <div class="md:flex md:justify-center">
        <div class="md:w-1/2">
            <img src="{{ asset('img/login.jpg')}}" alt="registro" class="md:gap-4 md:items-center">
        </div>
        <div class="md:w-1/2 md:justify-center bg-white p-6 rounded-lg shadow">
            <form method="POST" action="{{ route('login')}}">
                @csrf
                @if(session('mensaje'))
                <p class="bg-red-500 text-white my-2 rounded-lg text-sm p-2 text-center">
                    {{ session('mensaje') }}
                </p>
                @endif
                        <div class="mb-5">
                            <label  for='email' class="mb-2 block uppercase text-gray-500 font-bold">
                                email:
                            </label>
                            <input type="email"
                                name="email" placeholder="Tu email"
                                class="border p-3 w-full rounded-lg @error('email') border-red-500 @enderror"
                                id="email"
                                value="{{ old('name') }}"
                            >
                            @error('email')
                            <p class="bg-red-500 text-white my-2 rounded-lg
                            text-sm p-2 text-center"> {{ $message }} </p>
                        @enderror
                        </div>
                        <div class="mb-5">
                            <label  for='password' class="mb-2 block uppercase text-gray-500 font-bold">
                                Password:
                            </label>
                            <input type="password"
                                name="password" placeholder="Tu contraseña"
                                class="border p-3 w-full rounded-lg @error('password') border-red-500 @enderror"
                                id="password"
                            >
                            @error('password')
                            <p class="bg-red-500 text-white my-2 rounded-lg
                            text-sm p-2 text-center"> {{ $message }} </p>
                        @enderror
                        </div>

                        <div class="mb-5">
                            <input type="checkbox" name='remember'/>
                            <label class="text-gray-500 text-sm">
                                Mantener Sesión Abierta
                            </label>
                        </div>

                        <input type="submit" value="Iniciar Sesión" class="bg-sky-600 hover:700 transition-colors cursor-pointer
                            uppercase font-bold w-full p-3 text-white rounded-lg
                        ">

            </form>
        </div>
    </div>
@endsection
