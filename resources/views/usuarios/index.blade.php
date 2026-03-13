@extends('layout.admin')

@section('title', 'Usuarios')

@section('content')

    <div class="container mx-auto px-4 py-8">
        <h1 class="text-2xl font-bold mb-4">Usuarios</h1>
        <a href="{{ route('usuarios.create') }}" class="px-4 py-2 bg-indigo-600 text-white rounded-md hover:bg-indigo-700 mb-4 inline-block">Agregar Usuario</a>

        <table class="min-w-full bg-white border border-gray-200">
            <thead>
                <tr>
                    <th class="py-2 px-4 border-b">ID</th>
                    <th class="py-2 px-4 border-b">Nombre</th>
                    <th class="py-2 px-4 border-b">Email</th>
                    <th class="py-2 px-4 border-b">Tipo de usuario</th>
                    <th class="py-2 px-4 border-b">Acciones</th>
                </tr>
            </thead>
            <tbody>
                @foreach($usuarios as $usuario)
                <tr>
                    <td class="py-2 px-4 border-b">{{ $usuario->id }}</td>
                    <td class="py-2 px-4 border-b">{{ $usuario->name }}</td>
                    <td class="py-2 px-4 border-b">{{ $usuario->email }}</td>
                    <td class="py-2 px-4 border-b">{{ $usuario->user_type }}</td>
                    <td class="py-2 px-4 border-b">
                        <a href="{{ route('usuarios.edit', $usuario->id) }}" class="px-3 py-1 bg-yellow-500 text-white rounded-md hover:bg-yellow-600">Editar</a>
                        <a href="{{ route('usuarios.delete_confirm', $usuario->id) }}" class="px-3 py-1 bg-red-500 text-white rounded-md hover:bg-red-600">Eliminar</a>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>


@endsection