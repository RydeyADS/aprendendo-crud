<h1>Criar Produto</h1>

<form action="/produtos" method="POST">
    @csrf

    <input type="text" name="nome" placeholder="Nome do produto">
    <input type="text" name="preço" placeholder="preço do produto">

    <button type="submit">Salvar</button>
</form>









