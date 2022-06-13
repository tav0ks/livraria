<h1>Editar o Livro {{ $livro->titulo }}</h1>
@if ($errors->any())
    @foreach ($errors->all() as $error)
        <p> {{ $error }}</p>
    @endforeach
@endif

<div>
    <form method="post" action="{{ route('livros.update', $livro->id) }}">
        @method('put')
        @csrf
        <p>Título: <input type="text" name="titulo" id="titulo" placeholder="Digite titulo"
                value="{{ $livro->titulo }}">
        <p>Ano: <input type="text" name="ano" id="ano" placeholder="Digite ano" value="{{ $livro->ano }}">
        <p>Idioma: <input type="text" name="idioma" id="idioma" placeholder="Digite idioma"
                value="{{ $livro->idioma }}">
        <p>ISBN: <input type="text" name="isbn" id="isbn" placeholder="Digite ISBN" value="{{ $livro->isbn }}">
        <p><button type="submit"> Enviar</button></p>
        <button type="submit"><a href=" {{ route('livros.index') }}">Voltar</a></button>
    </form>
</div>
