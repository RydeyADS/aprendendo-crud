<h1>{{ $cliente->nome }} {{ $cliente->sobrenome }}</h1>

<hr>

<p><strong>Nome:</strong> {{ $cliente->nome }}</p>

<p><strong>Sobrenome:</strong> {{ $cliente->sobrenome }}</p>

<p><strong>CPF:</strong> {{ $cliente->cpf }}</p>

<p><strong>Data de Nascimento:</strong> {{ $cliente->data_nascimento }}</p>

<p><strong>Endereço:</strong> {{ $cliente->endereco }}</p>

<p><strong>Email:</strong> {{ $cliente->email }}</p>

<p><strong>WhatsApp:</strong> {{ $cliente->whatsapp }}</p>

<p><strong>Ativo:</strong> {{ $cliente->ativo ? 'Sim' : 'Não' }}</p>
<hr>

<a href="{{ route('clientes.index') }}">
    Voltar
</a>
