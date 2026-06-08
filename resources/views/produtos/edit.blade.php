<h1>Editar Produto</h1>

<form action="/produtos/{{ $produto->id }}" method="POST">
    @csrf
    @method('PUT')

    <input type="text" name="nome" value="{{ $produto->nome }}">
    <input type="text" name="preco" value="{{ $produto->preco }}">

    <button type="submit">Atualizar</button>
</form>