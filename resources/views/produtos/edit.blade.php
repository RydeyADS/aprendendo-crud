<h1>Editar Informações DO Produto</h1>

<form action="{{ route('produtos.update', $produto) }}" method="POST">
    @csrf

    <input type="text" name="marca" placeholder="Marca">
    <input type="text" name="modelo" placeholder="Modelo">
    <input type="text" name="cor" placeholder="Cor">

    <input type="number" name="memoria_ram" placeholder="Memória RAM (GB)">
    <input type="number" name="armazenamento" placeholder="Armazenamento (GB)">

    <input type="text" name="imei" placeholder="IMEI">

    <input type="text" name="estado" placeholder="Estado">

    <input type="number" step="0.01" name="preco" placeholder="Preço">

    <input type="number" name="estoque" placeholder="Estoque">



    <button type="submit">Salvar</button>
</form>

