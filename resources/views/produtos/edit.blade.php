
 @csrf

  // Envia os dados para a rota de atualização do produto
<form action="{{ route('produtos.update', $produto) }}" method="POST">  method="POST" é o que informa ao navegador como os dados serão enviados para o servidor.
 @method('PUT')
 <input type="text" name="nome" value="{{ $produto->nome }}">
 <input type="number" step="0.01" name="preco" value="{{ $produto->preco }}">
 <input type="number" name="quantidade" value="{{ $produto->quantidade }}">
 <input type="number" name="estoque" value="{{ $produto->estoque }}">
 <button type="submit">Atualizar</button>
</form>