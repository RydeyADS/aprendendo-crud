<h1>Editar Informações do Produto</h1>

<form action="{{ route('produtos.update', $produto) }}" method="POST">
    @csrf
    @method('PUT')

    <input type="text" name="marca" value="{{ $produto->marca }}" placeholder="Marca">
    <input type="text" name="modelo" value="{{ $produto->modelo }}" placeholder="Modelo">
    <input type="text" name="cor" value="{{ $produto->cor }}" placeholder="Cor">

    <input type="number" name="memoria_ram" value="{{ $produto->memoria_ram }}" placeholder="Memória RAM (GB)">
    <input type="number" name="armazenamento" value="{{ $produto->armazenamento }}" placeholder="Armazenamento (GB)">

    <input type="text" name="imei" value="{{ $produto->imei }}" placeholder="IMEI">

    <input type="text" name="estado" value="{{ $produto->estado }}" placeholder="Estado">

    <input type="number" step="0.01" name="preco" value="{{ $produto->preco }}" placeholder="Preço">

    <input type="number" name="estoque" value="{{ $produto->estoque }}" placeholder="Estoque">

    <button type="submit">Salvar</button>
</form>
