@extends('layout.admin')

@section('content')
 
<div class="max-w-3xl mx-auto p-6 bg-white rounded-lg shadow-md">
    <h1 class="text-2xl font-bold mb-4">Crear Nueva Categoría</h1>
    
    <form action="{{ route('categorias.store') }}" method="POST" class="space-y-4">
        @csrf
        <div>
            <label for="nombre" class="block text-sm font-medium text-gray-700">Nombre</label>
            <input type="text" name="nombre" id="nombre" required class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-indigo-500 focus:ring focus:ring-indigo-200 focus:ring-opacity-50">
        </div>

        <div>
            <label for="descripcion" class="block text-sm font-medium text-gray-700">Descripción</label>
            <textarea name="descripcion" id="descripcion" rows="4" class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-indigo-500 focus:ring focus:ring-indigo-200 focus:ring-opacity-50"></textarea>
        </div>

        <div class="flex justify-end space-x-3">
            <a href="{{ route('categorias.index') }}" class="px-4 py-2 bg-gray-500 text-white rounded-md hover:bg-gray-600">Cancelar</a>
            <button type="submit" class="px-4 py-2 bg-indigo-600 text-white rounded-md hover:bg-indigo-700">Crear Categoría</button>
        </div>
    </form>
</div>

@endsection