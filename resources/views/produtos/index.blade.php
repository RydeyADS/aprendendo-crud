<form action="{{ route('produtos.store') }}" method="POST">
@csrf

<input type="text" name="nome" placeholder="Nome do Produto">
<input type="number" step="0.01" name="preco" placeholder="Preço">
<input type="number" name="quatidade" placeholder="Quantidade">

<button type="submit">Salvar</button>
</form>
