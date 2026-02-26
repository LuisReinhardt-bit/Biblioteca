@extends('layout.admin')

@section('title', 'Crear Libro | Biblioteca')

@section('content')
    <div class="container">
        <h1>Crear Nuevo Libro</h1>

        @if ($errors->any())
            <div class="alert alert-danger">
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif

        <form action="{{ route('libros.store') }}" method="POST">
            @csrf
            <div class="form-group">
                <label for="titulo">Título:</label>
                <input type="text" class="form-control" id="titulo" name="titulo" value="{{ old('titulo') }}" required>
            </div> 

            <div class="form-group">
                <label for="isbn">ISBN:</label>
                <input type="text" class="form-control" id="isbn" name="isbn" value="{{ old('isbn') }}" required>
            </div>

            <div class="form-group">
                <label for="autor">Autor:</label>
                <input type="text" class="form-control" id="autor" name="autor" value="{{ old('autor') }}" required>
            </div>

            <div class="form-group">
                <label for="editorial">Editorial:</label>
                <input type="text" class="form-control" id="editorial" name="editorial" value="{{ old('editorial') }}" required>
            </div>

            <div class="form-group">
                <label for="categoria">Categoría:</label>
                <select class="form-control" id="categoria_id" name="categoria" required>
                    <option value="">Seleccionar categoría</option>
                    @foreach ($categorias as $categoria)
                        <option value="{{ $categoria->id }}">{{ $categoria->nombre }}</option>
                    @endforeach
                </select>
            </div>

            <div class="flex justify-end mt-4">
                <a href="{{ route('home') }}" class="px-4 py-2 bg-gray-600 text-white rounded-md hover:bg-gray-700">Cancelar</a>
                <button type="submit" class="ml-2 px-4 py-2 bg-indigo-600 text-white rounded-md hover:bg-indigo-700">Guardar</button>
            </div>
            
        </form>
    </div>
@endsection