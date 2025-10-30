<?php

namespace App\Http\Controllers;

use App\Models\Produto;
use Illuminate\Http\Request;

class ProdutoController extends Controller
{
    // Exibe a lista de produtos e o formulário
    public function index()
    {
        $produtos = Produto::all();
        return view('produtos', compact('produtos'));
    }

    // Processa o formulário e salva no banco
    public function store(Request $request)
    {
        // Validação básica
        $request->validate([
            'nome' => 'required'
        ]);

        // Criação do produto
        Produto::create([
            'nome' => $request->nome
        ]);

        // Redireciona com mensagem de sucesso
        return redirect('/produtos')->with('success', 'Produto cadastrado com sucesso!');
    }
}
