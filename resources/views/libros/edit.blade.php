@extends('layout.admin')
@section('title', 'Editar Libro | Biblioteca')

@section('content')
  <div class="flex justify-end mb-4">
    <form action="{{ route('libros.update', $libro->id) }}" method="POST" class="inline">
        @csrf
        @method('PUT')
  </div>

  <div class="container mx-auto px-4 py-8">
        <h1 class="text-2xl font-bold mb-6">Editar Libro</h1>

        @if (session('success'))
            <div class="bg-green-100 border border-green-400 text-green-700 px-4 py-3 rounded mb-4">
                {{ session('success') }}
            </div>
        @endif

        <div class="form-group">
                <label for="titulo">Título:</label>
                <input type="text" class="form-control" id="titulo" name="titulo" value="{{ old('titulo', $libro->titulo) }}" required>
            </div> 

            <div class="form-group">
                <label for="isbn">ISBN:</label>
                <input type="text" class="form-control" id="isbn" name="isbn" value="{{ old('isbn', $libro->isbn) }}" required>
            </div>

            <div class="form-group">
                <label for="autor">Autor:</label>
                <input type="text" class="form-control" id="autor" name="autor" value="{{ old('autor', $libro->autor) }}" required>
            </div>

            <div class="form-group">
                <label for="editorial">Editorial:</label>
                <input type="text" class="form-control" id="editorial" name="editorial" value="{{ old('editorial', $libro->editorial) }}" required>
            </div>

            <div class="form-group">
                <label for="categoria">Categoría:</label>
                <select class="form-control" id="categoria_id" name="categoria" required>
                    <option value="">Seleccionar categoría</option>
                    @foreach ($categorias as $categoria)
                        <option value="{{ $categoria->id }}" {{ old('categoria_id', $libro->categoria_id) == $categoria->id ? 'selected' : '' }}>{{ $categoria->nombre }}</option>
                    @endforeach
                </select>
            </div>

            <div class="flex justify-end mt-4">
                <a href="{{ route('home') }}" class="px-4 py-2 bg-gray-600 text-white rounded-md hover:bg-gray-700">Cancelar</a>
                <button type="submit" class="ml-2 px-4 py-2 bg-indigo-600 text-white rounded-md hover:bg-indigo-700">Guardar</button>
            </div>
        
    </div>
    
     
@endsection