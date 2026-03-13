@extends('layout.admin')

@section('content')

<div class="max-w-3xl mx-auto p-6 bg-white rounded-lg shadow-md">
    <h1 class="text-2xl font-bold mb-4">Confirmar eliminación de usuario</h1>
    
    <p class="mb-4">¿Estás seguro de que deseas eliminar al usuario <strong>{{ $usuario->name }}</strong>?</p>

    <table class="min-w-full bg-white border border-gray-200 mb-4">
        <thead>
            <tr>
                <th class="py-2 px-4 border-b">ID</th>
                <th class="py-2 px-4 border-b">Nombre</th>
                <th class="py-2 px-4 border-b">Email</th>
                <th class="py-2 px-4 border-b">Tipo de usuario</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td class="py-2 px-4 border-b">{{ $usuario->id }}</td>
                <td class="py-2 px-4 border-b">{{ $usuario->name }}</td>
                <td class="py-2 px-4 border-b">{{ $usuario->email }}</td>
                <td class="py-2 px-4 border-b">{{ $usuario->user_type }}</td>
            </tr>
        </tbody>
    </table>
    
    <form action="{{ route('usuarios.destroy', $usuario->id) }}" method="POST" class="space-x-3">
        @csrf
        @method('DELETE')
        <a href="{{ route('usuarios.index') }}" class="px-4 py-2 bg-gray-500 text-white rounded-md hover:bg-gray-600">Cancelar</a>
        <button type="submit" class="px-4 py-2 bg-red-600 text-white rounded-md hover:bg-red-700">Eliminar Usuario</button>
    </form>

@endsection