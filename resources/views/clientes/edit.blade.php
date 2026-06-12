<h1>EDITAR INFORMAÇÕES DO CLIENTE</h1>

<form action="{{ route('clientes.update', $cliente) }}" method="POST">
    @csrf
    @method('PUT')

    <input type="text" name="nome" value="{{ $cliente->nome }}" placeholder="Nome">
    <input type="text" name="sobrenome" value="{{ $cliente->sobrenome }}" placeholder="Sobrenome">
    <input type="text" name="cpf" value="{{ $cliente->cpf }}" placeholder="CPF">
    <input type="date" name="data_nascimento" value="{{ $cliente->data_nascimento }}" placeholder="Data de Nascimento">
    <input type="text" name="endereco" value="{{ $cliente->endereco }}" placeholder="Endereço">
    <input type="email" name="email" value="{{ $cliente->email }}" placeholder="Email">
    <input type="text" name="whatsapp" value="{{ $cliente->whatsapp }}" placeholder="WhatsApp">

    <button type="submit">Salvar alterações</button>
</form>
