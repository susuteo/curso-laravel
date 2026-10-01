<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Livro;

class LivroController extends Controller
{
    public function index() {
    $livros = Livro::all(); 
    return view('livros.index', [
        'livros' => $livros 
    ]);
}

    public function show($isbn) {
        if ($isbn == '123') {
            return 'Livro encontrado: Quincas Borba';
        }
        return 'Livro não encontrado.';
    }
}