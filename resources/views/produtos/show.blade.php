<h1>{{ $produto->nome }}</h1>

<p>Preço: R$ {{ number_format($produto->preco, 2, ',', '.') }}</p>

<p>Quantidade: {{ $produto->quantidade }}</p>

<a href="{{ route('produtos.index') }}">
    Voltar
</a>