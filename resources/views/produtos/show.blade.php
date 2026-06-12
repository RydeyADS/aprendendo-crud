<h1>{{ $produto->marca }} {{ $produto->modelo }}</h1>

<hr>

<p><strong>Marca:</strong> {{ $produto->marca }}</p>

<p><strong>Modelo:</strong> {{ $produto->modelo }}</p>

<p><strong>Cor:</strong> {{ $produto->cor }}</p>

<p><strong>Memória RAM:</strong> {{ $produto->memoria_ram }} GB</p>

<p><strong>Armazenamento:</strong> {{ $produto->armazenamento }} GB</p>

<p><strong>IMEI:</strong> {{ $produto->imei }}</p>

<p><strong>Estado:</strong> {{ $produto->estado }}</p>

<p><strong>Estoque:</strong> {{ $produto->estoque }}</p>


<hr>

<a href="{{ route('produtos.index') }}">
    Voltar
</a>
