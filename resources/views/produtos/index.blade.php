<h1>Lista de Produtos</h1>

<a href="{{ route('produtos.create') }}">
    Cadastrar Produto
</a>

@if ($produtos->count() > 0)

    @foreach ($produtos as $produto)


            <p>
                <strong>{{ $produto->marca }} {{ $produto->modelo }}</strong>
            </p>

            <p>
                Cor: {{ $produto->cor }}
            </p>

            <p>
                IMEI: {{ $produto->imei }}
            </p>

            <p>
                Memória RAM: {{ $produto->memoria_ram }} GB
            </p>

            <p>
                Armazenamento: {{ $produto->armazenamento }} GB
            </p>

            <p>
                Estado: {{ $produto->estado }}
            </p>

            <p>
                Estoque: <strong>{{ $produto->quantidade }}</strong>
            </p>

            <hr>

            <a href="{{ route('produtos.show', $produto) }}">
                Ver detalhes
            </a>

            <a href="{{ route('produtos.edit', $produto) }}">
                Editar
            </a>

            <form action="{{ route('produtos.destroy', $produto) }}" method="POST" style="display:inline;">
                @csrf
                @method('DELETE')

                <button type="submit" onclick="return confirm('Tem certeza que deseja excluir este produto?')">
                    Excluir
                </button>
                <br><a href="{{ route('produtos.index') }}">Voltar</a>


            </form>

    @endforeach

@else

    <p>Nenhum produto cadastrado.</p>

@endif
