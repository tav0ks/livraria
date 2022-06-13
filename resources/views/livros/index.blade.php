<p> <a href="{{ route('livros.create') }}"> Inserir novo Livro</a> </p>

<hr>

@if (session('message'))
    <div>
        {{ session('message') }}
    </div>
@endif

<p>Lista de livros</p>
@foreach ($livros as $livro)
    <p>
        {{ $livro->titulo }}
        <a href="{{ route('livros.show', $livro->id) }}">[Ver detalhes]</a>
        <a href="{{ route('livros.edit', $livro->id) }}">[Editar]</a>
    </p>
@endforeach
