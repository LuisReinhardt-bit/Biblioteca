<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use app\models\Categoria;

class CategoriasController extends Controller
{
    public function index()
    {
        $categorias = Categoria::all();

        return view('categorias.index', compact('categorias'));
    }
}
