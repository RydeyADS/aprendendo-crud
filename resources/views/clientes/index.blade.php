<h1>LISTA DE CLIENTES</h1>

<a href="{{ route('clientes.create') }}">
    CADASTRAR NOVO CLIENTE
</a>

@if ($clientes->count() > 0)

    @foreach ($clientes as $cliente)


            <p>
                <strong>{{ $cliente->nome }} {{ $cliente->sobrenome }}</strong>
            </p>

            <p>
                CPF: {{ $cliente->cpf }}
            </p>

            <p>
                Data de Nascimento: {{ $cliente->data_nascimento }}
            </p>

            <p>
                Endereço: {{ $cliente->endereco }}
            </p>

            <p>
                Email: {{ $cliente->email }}
            </p>

            <p>
                whatsapp: {{ $cliente->Whatsapp }}
            </p>
                Ativo: {{ $cliente->ativo ? 'Sim' : 'Não' }}



            <a href="{{ route('clientes.show', $cliente) }}">
                Ver detalhes
            </a>

            <a href="{{ route('clientes.edit', $cliente) }}">
                Editar
            </a>

            <form action="{{ route('clientes.destroy', $cliente) }}" method="POST" style="display:inline;">
                @csrf
                @method('DELETE')

                <button type="submit" onclick="return confirm('Tem certeza que deseja excluir este cliente?')">
                    Excluir
                </button>
                <br><a href="{{ route('clientes.index') }}">Voltar</a>


            </form>

    @endforeach

@else

    <p>NENHUM CLIENTE  CADASTRADO.</p>

@endif

