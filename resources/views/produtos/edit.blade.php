<form action="{{ route('produtos.update', $produto) }}" method="POST">
    @csrf
    @method('PUT')

    <input type="text" name="nome" value="{{ $produto->nome }}">

    <input type="number" step="0.01" name="preco" value="{{ $produto->preco }}">

    <input type="number" name="quantidade" value="{{ $produto->quantidade }}">

    <button type="submit">Atualizar</button>
</form>
    