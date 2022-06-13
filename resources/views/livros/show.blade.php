<h1>Detalhes do livro {{ $livro->titulo }}</h1>

<ul>
    <li>ISBN: {{ $livro->isbn }}</li>
    <li>Ano: {{ $livro->ano }}</li>
    <li>Idioma: {{ $livro->idioma }}</li>
</ul>

<form action="{{ route('livros.destroy', $livro->id) }}" method="post">
    @csrf
    <p><input type="hidden" name="_method" value="DELETE">
    <p><button type="submit"> Deletar o livro {{ $livro->titulo }}</button>
    <p><button type="submit"><a href=" {{ route('livros.index') }}">Voltar</a></button>
</form>
