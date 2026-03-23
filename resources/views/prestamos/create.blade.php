@extends('layout.admin')

@section('content')
 <div class="container mx-auto px-4 py-8">
        <h1 class="text-2xl font-bold mb-4">Agregar préstamo</h1>

        @if(session('error'))
            <div class="bg-red-100 border border-red-400 text-red-700 px-4 py-3 rounded mb-4">
                {{ session('error') }}
            </div>
        @endif

        @if($errors->any())
            <div class="bg-red-100 border border-red-400 text-red-700 px-4 py-3 rounded mb-4">
                <ul class="list-disc pl-5">
                    @foreach($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif

       <div class="bg-white p-6 rounded-md shadow-md rounded-lg p-6 mt-4" > 

        <form action="{{ route('prestamos.buscar_usuario') }}" method="POST" class="bg-white p-6 rounded-md shadow-md">
            @csrf
            <div class="mb-4">
                <label for="usuario_id" class="block text-gray-700 font-medium">Usuario</label>

                <div class="mb-4">
                    <label for="usuario_id" class="block text-gray-700 font-medium">ID Usuario:</label>
                    <input
                    type="text"
                    name="usuario_id"
                    id="usuario_id"
                    value="{{ old('usuario_id') }}"
                    class="w-full px-3 py-2 border border-gray-300 rounded-md focus:outline-none focus:ring focus:ring-blue-300"
                >
            </div>

            <div class="mb-4">
                    <label for="usuario_nombre" class="block text-gray-700 font-medium">Nombre Usuario:</label>
                    <input
                    type="text"
                    name="usuario_nombre"
                    id="usuario_nombre"
                    value="{{ old('usuario_nombre') }}"
                    class="w-full px-3 py-2 border border-gray-300 rounded-md focus:outline-none focus:ring focus:ring-blue-300">
            </div>
            <button type="submit" class="bg-blue-500 text-white px-4 py-2 rounded-md hover:bg-blue-600">Buscar Usuario</button>
        </form>

        @isset($usuario)
            <div class="mt-6">
                <h2 class="text-xl font-bold mb-4">Usuario Encontrado:</h2>
                <p><strong>ID:</strong> {{ $usuario->id }}</p>
                <p><strong>Nombre:</strong> {{ $usuario->name }}</p>
                <p><strong>Email:</strong> {{ $usuario->email }}</p>
            </div>

            <form action="{{ route('prestamos.select_libro') }}" method="POST">
                @csrf
                <input type="hidden" name="usuario_id" value="{{ $usuario->id }}">
                <button type="submit" class="bg-green-500 text-white px-4 py-2 rounded-md hover:bg-green-600 mt-4">Seleccionar Libro</button>
            </form>

            @isset($libros)
                <div class="mt-8">
                    <h2 class="text-xl font-bold mb-4">Seleccione un libro</h2>

                    <form action="{{ route('prestamos.store') }}" method="POST">
                        @csrf
                        <input type="hidden" name="usuario_id" value="{{ $usuario->id }}">

                        <div class="space-y-3">
                            <label for="libro_id" class="block text-gray-700 font-medium">Libro</label>
                            <select name="libro_id" id="libro_id" required class="w-full px-3 py-2 border border-gray-300 rounded-md focus:outline-none focus:ring focus:ring-blue-300">
                                <option value="" disabled selected>Seleccione un libro</option>
                                @foreach($libros as $libro)
                                    <option value="{{ $libro->id }}">{{ $libro->titulo }} - {{ $libro->autor }}</option>
                                @endforeach
                            </select>
                        </div>

                        <button type="submit" class="mt-6 bg-blue-600 text-white px-4 py-2 rounded-md hover:bg-blue-700">Registrar préstamo</button>
                    </form>
                </div>
            @endisset
        @endisset
        </div>
    </div>

@endsection