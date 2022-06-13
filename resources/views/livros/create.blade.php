<div>
    <form method="post" action="{{ route('livros.store') }}">
        @csrf
        <p>Título: <input type="text" name="titulo" id="titulo" placeholder="Digite titulo"
                value="{{ old('titulo') }}">
        <p>Ano: <input type="text" name="ano" id="ano" placeholder="Digite ano" value="{{ old('ano') }}">
        <p>Idioma: <input type="text" name="idioma" id="idioma" placeholder="Digite idioma"
                value="{{ old('idioma') }}">
        <p>ISBN: <input type="text" name="isbn" id="isbn" placeholder="Digite ISBN" value="{{ old('isbn') }}">
        <p><button type="submit">Enviar</button></p>
    </form>
</div>
