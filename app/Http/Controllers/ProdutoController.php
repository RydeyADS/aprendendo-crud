<?php

namespace App\Http\Controllers;

// Importa o Model Produto
use App\Models\Produto;

// Importa a classe Request para receber dados dos formulários
use Illuminate\Http\Request;

// Controller responsável pelas operações do CRUD de Produtos
class ProdutoController extends Controller
{
   
    /**
     * LISTAR PRODUTOS
     *
     * Quando o usuário acessa:
     * /produtos
     *
     * Busca todos os produtos do banco e envia para a view index.
     */
    public function index()
{
    // Busca todos os registros da tabela produtos
    $produtos = Produto::all();

       // Envia os produtos para a view
    return view('produtos.index', compact('produtos'));

}

  
     /**
     * FORMULÁRIO DE CADASTRO
     *
     * Quando o usuário clica em:
     * "Cadastrar Produto"
     *
     * Exibe o formulário create.blade.php
     */
    public function create()
{
    return view('produtos.create');
}

   
    /**
     * SALVAR PRODUTO
     *
     * Recebe os dados enviados pelo formulário create.
     */
    public function store(Request $request)
{
    // Cria um novo produto no banco com os dados do formulário
    Produto::create($request->all());

       // Retorna para a listagem de produtos
    return redirect()->route('produtos.index');
}
   
   

/**
     * FORMULÁRIO DE EDIÇÃO
     *
     * Recebe o produto selecionado
     * e envia para edit.blade.php
     */
    public function edit(Produto $produto)
{
    return view('produtos.edit', compact('produto'));

    }


    /**
     * ATUALIZAR PRODUTO
     *
     * Recebe os novos dados do formulário
     * e atualiza o registro no banco.
     */
    public function update(Request $request, Produto $produto)
{

     // Atualiza os dados do produto com os dados do formulário
    $produto->update($request->all());

     // Volta para a listagem de produtos
    return redirect()->route('produtos.index');

}



 /**
     * EXIBIR UM PRODUTO
     *
     * Mostra os detalhes de um produto específico.
     *
     * URL:/produtos/1
     */
public function show(Produto $produto)
{
    return view('produtos.show', compact('produto'));
}



     /**
     * EXCLUIR PRODUTO
     *
     * Remove o produto do banco.
     */
    public function destroy(Produto $produto)
{

    // Exclui o produto do banco
    $produto->delete();

    // Volta para a listagem de produtos
    return redirect()->route('produtos.index');
}

}
