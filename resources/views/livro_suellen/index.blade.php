@extends('main')

@section('content')
    <h1>Meus Livros - Suellen</h1>
    <ul>
        @forelse($livros as $livro)
            <li>
                <a href="/livros-suellen/{{ $livro->isbn }}">
                    {{ $livro->titulo }} - {{ $livro->autor }}
                </a>
            </li>
        @empty
            <li>Nenhum livro encontrado.</li>
        @endforelse
    </ul>
@endsection