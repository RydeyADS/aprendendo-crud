<!DOCTYPE html>
<html>
<head>
    <title>Nova Categoria</title>
</head>
<body>

<h1>Cadastrar Categoria</h1>

<form action="{{ route('categorias.store') }}" method="POST">

    @csrf

    <input
        type="text"
        name="nome"
        placeholder="Nome da categoria"
    >

    <button type="submit">
        Salvar
    </button>

</form>

</body>
</html>