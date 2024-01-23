<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Cliente;

class CadastroController extends Controller
{
    public function cadastrarCliente(Request $request)
    {
        $dadosCliente = $request->validate([
            'nome' => 'required|string|max:255',
            'email' => 'required|email|max:255',
            'cpf' => 'required|string|max:14', // Ajuste conforme necessário
        ]);

        // Salvar os dados na tabela "clientes"
        Cliente::create($dadosCliente);

        return response()
            ->json(['message' => 'Informações do cliente recebidas com sucesso'])
            ->header('Location', route('pagamento')); // Redirecionamento para a rota 'pagamento'
    }
}
