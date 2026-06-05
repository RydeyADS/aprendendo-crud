<!DOCTYPE html>
<html>
<head>
    <title>Categorias</title>
</head>
<body>

<h1>Lista de Categorias</h1>

<a href="{{ route('categorias.create') }}">
    Nova Categoria
</a>

<hr>

@foreach($categorias as $categoria)

<p>

    {{ $categoria->nome }}

    <a href="{{ route('categorias.edit', $categoria->id) }}">
        Editar
    </a>

    <form
        action="{{ route('categorias.destroy', $categoria->id) }}"
        method="POST"
        style="display:inline"
    >

        @csrf
        @method('DELETE')

        <button type="submit">
            Excluir
        </button>

    </form>

</p>
    

@endforeach

</body>
</html>