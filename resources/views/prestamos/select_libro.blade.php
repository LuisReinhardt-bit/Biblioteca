@extends('layout.admin')

@section('content')
<div class="container mx-auto px-4 py-8">
    <h1 class="text-2xl font-bold mb-4">Seleccionar Libro</h1>

    <div class="bg-white p-6 rounded-md shadow-md rounded-lg p-6 mt-4">

    <div class="mt-6">
        <h2 class="text-xl font-semibold mb-4">Usuario:</h2>
        <p><Strong>ID:</Strong> {{ $usuario->id }}</p>
        <p><Strong>Nombre:</Strong> {{ $usuario->name }}</p>
        <p><Strong>Email:</Strong> {{ $usuario->email }}</p>
    </div>

         <form action="{{ route('prestamos.store') }}" method="POST" class="bg-white p-6 rounded-md shadow-md">
            @csrf
                <label for="libro_id" class="block text-gray-700 font-medium">ID Libro:</label>
                <select name="libro_id" id="libro_id" class="w-full px-3 py-2 border border-gray-300 rounded-md focus:outline-none focus:ring focus:ring-blue-300">
                    @foreach($libros as $libro)
                        <option value="{{ $libro->id }}">{{ $libro->titulo }} - {{$libro->autor}}</option>
                    @endforeach
                </select>

                <input
                    type="hidden"
                    name="usuario_id"
                    id="usuario_id"
                    value="{{ old('usuario_id') }}"
                >
                <div class="flex justify-end mt-4">
                <input
                    type="submit"
                    value="Buscar"
                    class="bg-blue-500 text-white px-4 py-2 rounded-md hover:bg-blue-600 transition-colors duration-300">
                    <a href="{{ route('prestamos.index') }}" class="inline-block align-baseline font-bold text-blue-500 hover:text-blue-700">Cancelar</a>
                </div>

            </div>

            <div class="mb-4">
                <label for="libro_titulo" class="block text-gray-700 font-medium">Título Libro:</label>
