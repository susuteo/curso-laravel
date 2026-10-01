<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\LivroSuellen;

class LivroSuellenController extends Controller
{
    public function index() {
        $livros = LivroSuellen::all();
        return view('livro_suellen.index', [
            'livros' => $livros
        ]);
    }

    public function show($isbn) {
        $livro = LivroSuellen::where('isbn', $isbn)->first();
        return view('livro_suellen.show', [
            'livro' => $livro
        ]);
    }
}
