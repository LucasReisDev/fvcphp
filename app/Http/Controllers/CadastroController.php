<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CadastroController extends Controller
{
    public function cadastrarCliente(Request $request)
    {
        // Lógica para salvar os dados do cliente no banco de dados (se necessário)

        // Redirecionar para a página de pagamento com os parâmetros do cliente
        return redirect()->route('pagamento', [
            'nome' => $request->input('nome'),
            'email' => $request->input('email'),
            'cpf' => $request->input('cpf'),
        ]);
    }
}
