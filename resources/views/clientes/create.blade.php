<h1>CADASTRO DE CLIENTES</h1>

<form action="{{ route('clientes.store') }}" method="POST">
    @csrf

    <input type="text" name="nome" placeholder="Nome">
    <input type="text" name="sobrenome" placeholder="Sobrenome">
    <input type="text" name="cpf" placeholder="CPF">
    <input type="date" name="data_nascimento" placeholder="Data de Nascimento">
    <input type="text" name="endereco" placeholder="Endereço">
    <input type="email" name="email" placeholder="Email">
    <input type="text" name="whatsapp" placeholder="WhatsApp">

    <button type="submit">SALVAR</button>
</form>
<br>
<a href="{{ route('clientes.index') }}">
    VOLTAR
