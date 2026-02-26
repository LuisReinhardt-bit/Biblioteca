@extends('layout.admin')
@section('title', 'Categorías | Biblioteca')
@section('page_title', 'Categorías')

@section('content')
  <div class="flex justify-end mb-4">
    <a href="{{ route('categorias.create') }}" class="px-4 py-2 bg-indigo-600 text-white rounded-md hover:bg-indigo-700">+ Nueva Categoría</a>
  </div>

  <div class="container mx-auto px-4 py-8">
        <h1 class="text-2xl font-bold mb-6">Categorías</h1>

        @if (session('success'))
            <div class="bg-green-100 border border-green-400 text-green-700 px-4 py-3 rounded mb-4">
                {{ session('success') }}
            </div>
        @endif

        <div class="bg-white shadow-md rounded-lg p-6">
            <table class="min-w-full table-auto">
                <thead>
                    <tr>
                        <th class="px-4 py-2 border-b text-left">ID</th>
                        <th class="px-4 py-2 border-b text-left">Nombre</th>
                        <th class="px-4 py-2 border-b text-left">Acciones</th>
                    </tr>
                </thead>

                <tbody>
                    @forelse ($categorias as $categoria)
                        <tr class="hover:bg-slate-50">
                            <td class="px-4 py-2 border-b">{{ $categoria->id }}</td>
                            <td class="px-4 py-2 border-b">{{ $categoria->nombre }}</td>
                            <td class="px-4 py-2 border-b">
                                <a href="{{ route('categorias.edit', $categoria->id) }}" class="text-blue-600 hover:underline">Editar</a>
                                <form action="{{ route('categorias.destroy', $categoria->id) }}" method="POST" class="inline-block" onsubmit="return confirm('¿Estás seguro de eliminar esta categoría?');">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="text-red-600 hover:underline ml-4">Eliminar</button>
                                </form>
                        </tr>
                    @empty
                        <tr>
                            <td colspan="3" class="px-4 py-3 text-slate-500">
                                No hay categorías registradas.
                            </td>
                        </tr>
                    @endforelse
                </tbody>
                {{ $categorias->links() }} <!-- Agrega los enlaces de paginación -->
            </table>
        </div>
    </div>
    
     
@endsection