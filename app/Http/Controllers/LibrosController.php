<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Categoria;
use App\Models\Libro;

class LibrosController extends Controller
{
    public function create()
    {
        $categorias = Categoria::all();
        return view('libros.create', compact('categorias'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'titulo' => 'required|string|max:255',
            'isbn' => 'required|string|max:20',
            'autor' => 'required|string|max:255',
            'editorial' => 'required|string|max:255',
            'categoria' => 'required|exists:categorias,id',
        ]);

        $libro = new Libro();
        $libro->titulo = $request->input('titulo');
        $libro->isbn = $request->input('isbn');
        $libro->autor = $request->input('autor');
        $libro->editorial = $request->input('editorial');
        $libro->categoria_id = $request->input('categoria');
        $libro->save();

        return redirect()->route('home')->with('success', 'Libro agregado exitosamente');
    }

    public function edit($id)
    {
        $libro = Libro::findOrFail($id);
        $categorias = Categoria::all();
        return view('libros.edit', compact('libro', 'categorias'));
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'titulo' => 'required|string|max:255',
            'isbn' => 'required|string|max:20',
            'autor' => 'required|string|max:255',
            'editorial' => 'required|string|max:255',
            'categoria' => 'required|exists:categorias,id',
        ]);

        $libro = Libro::findOrFail($id);
        $libro->titulo = $request->input('titulo');
        $libro->isbn = $request->input('isbn');
        $libro->autor = $request->input('autor');
        $libro->editorial = $request->input('editorial');
        $libro->categoria_id = $request->input('categoria');
        $libro->save();

        return redirect()->route('home')->with('success', 'Libro actualizado exitosamente');
    }
    
    public function destroy($id)
    {
        $libro = Libro::findOrFail($id);
        $libro->delete();

        return redirect()->route('home')->with('success', 'Libro eliminado exitosamente');
    }
}
