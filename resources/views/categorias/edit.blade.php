@extends('layout.admin')
@section('title', 'Editar Categoría | Biblioteca')
@section('content')
    <div class="container mx-auto px-4 py-8">
        <h1 class="text-2xl font-bold mb-6">Editar Categoría</h1>

        <div class="bg-white shadow-md rounded-lg p-6">
            <form action="{{ route('categorias.update', $categoria->id) }}" method="POST">
                @csrf
                @method('PUT')

                <div class="mb-4">
                    <label for="nombre" class="block text-gray-700 font-bold mb-2">Nombre:</label>
                    <input type="text" name="nombre" id="nombre" value="{{ old('nombre', $categoria->nombre) }}" required class="w-full px-3 py-2 border rounded-md focus:outline-none focus:ring focus:border-blue-300">
                </div>

                <div class="flex justify-end">
                    <a href="{{ route('categorias.index') }}" class="px-4 py-2 bg-gray-600 text-white rounded-md hover:bg-gray-700 mr-2">Cancelar</a>
                    <button type="submit" class="px-4 py-2 bg-indigo-600 text-white rounded-md hover:bg-indigo-700">Actualizar Categoría</button>
                </div>
            </form>
        </div>
    </div>
@endsection