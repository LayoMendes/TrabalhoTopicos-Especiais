<?php

namespace App\Http\Controllers;

use App\Models\Categoria;
use Illuminate\Http\Request;

class CategoriaController extends Controller
{
    // Exibe a lista de categorias e o formulário
    public function index()
    {
        $categorias = Categoria::all();
        return view('categorias', compact('categorias'));
    }

    // Processa o formulário e salva no banco
    public function store(Request $request)
    {
        // Validação básica
        $request->validate([
            'nome' => 'required'
        ]);

        // Criação da categoria
        Categoria::create([
            'nome' => $request->nome
        ]);

        // Redireciona com mensagem de sucesso
        return redirect('/categorias')->with('success', 'Categoria cadastrada com sucesso!');
    }
}
