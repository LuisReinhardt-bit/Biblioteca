@extends('layout.admin')

@section('content')
    <div class="container mx-auto px-4 py-8">
        <h1 class="text-2xl font-bold mb-4">Prestamos</h1>

        @if(session('success'))
            <div class="bg-green-100 border border-green-400 text-green-700 px-4 py-3 rounded mb-4">
                {{ session('success') }}
            </div>
        @endif
        @if(session('error'))
            <div class="bg-red-100 border border-red-400 text-red-700 px-4 py-3 rounded mb-4">
                {{ session('error') }}
            </div>
        @endif

        <a href="{{ route('prestamos.create') }}" class="px-4 py-2 bg-indigo-600 text-white rounded-md hover:bg-indigo-700 mb-4 inline-block">Crear prestamo</a>

        <table class="min-w-full bg-white border border-gray-200">
            <thead>
                <tr>
                    <th class="py-2 px-4 border-b">ID</th>
                    <th class="py-2 px-4 border-b">Libro</th>
                    <th class="py-2 px-4 border-b">Usuario</th>
                    <th class="py-2 px-4 border-b">Fecha</th>
                </tr>
            </thead>
            <tbody>
                @forelse($prestamos as $prestamo)
                    <tr>
                        <td class="py-2 px-4 border-b">{{ $prestamo->id }}</td>
                        <td class="py-2 px-4 border-b">{{ $prestamo->libro->titulo }} - {{ $prestamo->libro->autor }}</td>
                        <td class="py-2 px-4 border-b">{{ $prestamo->usuario->name }}</td>
                        <td class="py-2 px-4 border-b">{{ $prestamo->created_at->format('Y-m-d') }}</td>
                    </tr>
                @empty
                    <tr>
                        <td class="py-2 px-4 border-b text-center" colspan="4">No hay préstamos registrados.</td>
                    </tr>
                @endforelse
            </tbody>
        </table>
    </div>

@endsection