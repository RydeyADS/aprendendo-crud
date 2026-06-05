<!DOCTYPE html>
<html>
<head>
    <title>Editar Categoria</title>
</head>
<body>

<h1>Editar Categoria</h1>

<form
    action="{{ route('categorias.update', $categoria->id) }}"
    method="POST"
>

    @csrf
    @method('PUT')

    <input
        type="text"
        name="nome"
        value="{{ $categoria->nome }}"
    >

    <button type="submit">
        Atualizar
    </button>

</form>

</body>
</html>