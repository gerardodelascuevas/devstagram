@extends('layouts.app')

@section('titulo')
    Crea una publicacion
@endsection

@section('contenido')
    <div class="md:flex md:items-center">
        <div class="md:w-1/2 px-10" >
            Imagen aqui
        </div>
        <div class="md:w-1/2 p-10 md:justify-center bg-white rounded-lg shadow mt-10 md:mt-0" >
            <form action="/register" method="POST">
                @csrf
                <div class="md:w-1/2">
                    <label  for='name' class="mb-2 block uppercase text-gray-500 font-bold">
                        Nombre:
                    </label>
                    <input type="text"
                        name="name" placeholder="Nombre"
                        class="border p-3 w-full rounded-lg @error('name') border-red-500 @enderror"
                        id='name'
                        value="{{ old('name') }}"
                        >
                    @error('name')
                        <p class="bg-red-500 text-white my-2 rounded-lg
                        text-sm p-2 text-center"> {{ $message }} </p>
                    @enderror
                </div>
            </form>
            </div>
    </div>
@endsection
