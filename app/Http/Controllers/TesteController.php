<?php

namespace App\Http\Controllers;

use App\Models\Teste;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;


class TesteController
{
    public function index()
    {
        $tabela = Teste::all();

        return view('produtos.index')->with('produtos', $tabela);
    }

    public function create()
    {
        return view('produtos.cadastrar');
    }

    public function store(Request $request)
    {
        $teste = new Teste();
        $teste -> nome_produto = $request -> nome_produto;
        $teste -> imagem_produto = $request -> imagem_produto;
        $teste -> preco_produto = $request -> preco_produto;
        $teste -> cep = $request -> cep;
        $teste -> save();

        return redirect('Teste')->with('Sucesso', 'Produto Cadastrado!');
    }

    public function edit(Teste $Teste)
    {
        return view('produtos.editar', compact('Teste'));
    }

    public function update(Request $request, Teste $Teste)
    {
        $Teste->fill($request->all())->save();

        return redirect()->route('Teste.index')->with('Sucesso', 'Produto Editado!');
    }

    public function destroy(Teste $Teste)
    {
        $Teste->delete();

        return redirect()->route('Teste.index')->with('Excluir', 'Produto Excluido!');
    }
}