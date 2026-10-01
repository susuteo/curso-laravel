@extends('main')

@section('content')
    <h1>Lista de Livros</h1>
    <ul>
        @forelse($livros as $livro)
            <li>{{ $livro->titulo }} - {{ $livro->autor }} (ISBN: {{ $livro->isbn }})</li>
        @empty
            <li>Não há livros cadastrados.</li>
        @endforelse
    </ul>
@endsection