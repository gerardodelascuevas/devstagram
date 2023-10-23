@extends('layouts.app')

@push('styles')
    <link rel="stylesheet" href="https://unpkg.com/dropzone@5/dist/min/dropzone.min.css" type="text/css" />
@endpush

@section('titulo')
    Crea una publicacion
@endsection

@section('contenido')
    <div class="md:flex md:items-center">
        <div class="md:w-1/2 px-10" >
            <form  method="POST" id="dropzone" action="{{ route('imagenes.store') }}" enctype="multipart/form-data" class="dropzone border-dashed border-2 w-full h-96 rounded flex flex-col justify-center items-center">
                @csrf
            </form>
        </div>
        <div class="md:w-1/2 p-10 md:justify-center bg-white rounded-lg shadow mt-10 md:mt-0" >
            <form method="POST" >
                @csrf
                <div class="md:w-1/2">
                    <label  for='titulo' class="mb-2 block uppercase text-gray-500 font-bold">
                        Titulo:
                    </label>
                    <input type="text"
                        name="titulo" placeholder="Titulo"
                        class="border p-3 w-full rounded-lg @error('name') border-red-500 @enderror"
                        id='titulo'
                        value="{{ old('titulo') }}"
                        >
                    @error('name')
                        <p class="bg-red-500 text-white my-2 rounded-lg
                        text-sm p-2 text-center"> {{ $message }} </p>
                    @enderror
                </div>
                <div class="md:w-1/2">
                    <label  for='descripcion' class="mb-2 block uppercase text-gray-500 font-bold">
                        Descripción:
                    </label>
                    <textarea type="text"
                        name="descripcion" placeholder="Descripción"
                        class="border p-3 w-full rounded-lg @error('name') border-red-500 @enderror"
                        id='titulo'
                        value="{{ old('titulo') }}"
                        ></textarea>
                    @error('name')
                        <p class="bg-red-500 text-white my-2 rounded-lg
                        text-sm p-2 text-center"> {{ $message }} </p>
                    @enderror
                </div>
            </form>
        </div>
    </div>
@endsection
