<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Client;

class ClientController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
{
    $clientes = Client::all();
    return view('clientes.index', compact('clientes'));
}

public function create()
{
    return view('clientes.create');
}

public function store(Request $request)
{
    $data = $request->validate([
        'nome' => 'required',
        'sobrenome' => 'required',
        'cpf' => 'required|unique:clientes,cpf',
        'data_nascimento' => 'required|date',
        'endereco' => 'required',
        'email' => 'required|email|unique:clientes,email',
        'whatsapp' => 'required|unique:clientes,whatsapp',
    ]);

    Client::create($data);

    return redirect()->route('clientes.index')
        ->with('success', 'Cliente cadastrado com sucesso!');
}

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $cliente = Client::findOrFail($id);
        return view('clientes.show', compact('cliente'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $cliente = Client::findOrFail($id);
        return view('clientes.edit', compact('cliente'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
{
    $cliente = Client::findOrFail($id);

    $data = $request->validate([
        'nome' => 'required',
        'sobrenome' => 'required',
        'cpf' => 'required|unique:clientes,cpf,' . $cliente->id,
        'data_nascimento' => 'required|date',
        'endereco' => 'required',
        'email' => 'required|email|unique:clientes,email,' . $cliente->id,
        'whatsapp' => 'required|unique:clientes,whatsapp,' . $cliente->id,
    ]);

    $cliente->update($data);

    return redirect()->route('clientes.index')
        ->with('success', 'Cliente atualizado com sucesso!');
}
    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $cliente = Client::findOrFail($id);
        $cliente->delete();
        return redirect()->route('clientes.index')->with('success', 'Cliente excluído com sucesso!');
    }
}
