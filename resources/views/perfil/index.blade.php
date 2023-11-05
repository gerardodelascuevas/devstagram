@extends('layouts.app')

@section('titulo')
    Editar Perfil: {{auth()->user()->username}}
@endsection

@section('contenido')
    <div class="md:flex md:justify-center">
        <div class="md:w1/2 bg-shadow p-6">

            {{-- <form method="POST" action="/perfil.store" enctype="multipart/form-data" class="mt-10 md:mt-0" > --}}
                <form method="POST" action="{{ route('perfil.store') }}" enctype="multipart/form-data" class="mt-10 md:mt-0">
                @csrf
                <div class="md:w-1/2">
                    <label  for='username' class="mb-2 block uppercase text-gray-500 font-bold">
                        Username:
                    </label>
                    <input type="text"
                        name="username" placeholder="Nombre de Usuario"
                        class="border p-3 w-full rounded-lg @error('username') border-red-500 @enderror"
                        id='username'
                        value="{{ auth()->user()->username }}"
                        >
                    @error('username')
                        <p class="bg-red-500 text-white my-2 rounded-lg
                        text-sm p-2 text-center"> {{ $message }} </p>
                    @enderror
                </div>

                <div class="md:w-1/2">
                    <label  for='imagen' class="mb-2 block uppercase text-gray-500 font-bold">
                        Imagen Perfil:
                    </label>
                    <input type="file"
                        name="imagen" placeholder="Seleccionar imagen"
                        class="border p-3 w-full rounded-lg @error('imagen') border-red-500 @enderror"
                        id='imagen'
                        {{-- value="{{ auth()->user()->username }}" --}}
                        accept=".jpg, .jpeg, .png"
                        >
                    @error('username')
                        <p class="bg-red-500 text-white my-2 rounded-lg
                        text-sm p-2 text-center"> {{ $message }} </p>
                    @enderror
            </div>
            <input type="submit" value="Guardar cambios" class="bg-sky-600 hover:700 transition-colors cursor-pointer
            uppercase font-bold w-full p-3 text-white rounded-lg
        ">
            </form>
        </div>
    </div>
@endsection
