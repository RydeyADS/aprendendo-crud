<h1>Lista de Produtos</h1>

<a href="{{ route('produtos.create') }}">
    Cadastrar Produto
</a>

<hr>

@foreach ($produtos as $produto)

    <p>
        <strong>{{ $produto->nome }}</strong>
    </p>

    <p>
        Preço: R$ {{ number_format($produto->preco, 2, ',', '.') }}
    </p>

    <p>
        Quantidade em estoque: {{ $produto->quantidade }}
    </p>

    <a href="{{ route('produtos.edit', $produto) }}">
        Editar
    </a>

    <form action="{{ route('produtos.destroy', $produto) }}" method="POST">
        @csrf
        @method('DELETE')

        <button type="submit">
            Excluir
        </button>
    </form>

    <hr>

@endforeach