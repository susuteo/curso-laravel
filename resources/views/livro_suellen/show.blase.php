@extends('main')

@section('content')
    @if($livro)
        <h1>Detalhes do Livro</h1>
        <p><strong>Título:</strong> {{ $livro->titulo }}</p>
        <p><strong>Autor:</strong> {{ $livro->autor }}</p>
        <p><strong>ISBN:</strong> {{ $livro->isbn }}</p>
    @else
        <h1>Livro não encontrado!</h1>
    @endif
    <br>
    <a href="/livros-suellen">Voltar para a lista</a>
@endsection