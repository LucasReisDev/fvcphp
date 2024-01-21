<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Cliente;
use App\Models\Pagamento;
class CompraController extends Controller
{
    public function index()
    {
        return view('pagamento');
    }

    public function processarPagamento(Request $request)
{
    // Lógica para processar o pagamento (usar serviços de pagamento como PagSeguro, Stripe, etc.)

    // Simular pagamento bem-sucedido
    $cliente = new Cliente();
    $cliente->nome = $request->input('nome');
    $cliente->email = $request->input('email');
    $cliente->cpf = $request->input('cpf');
    $cliente->save();

    // Salvar informações de pagamento no banco de dados
    $pagamento = new Pagamento();
    $pagamento->cliente_id = $cliente->id;
    $pagamento->status = 'pendente'; // Atualize conforme necessário
    $pagamento->save();

    // Envie o eBook por e-mail
    // Implemente a lógica para anexar e enviar o eBook por e-mail

    // Redirecione para a página de agradecimento
    return redirect('/agradecimento');
}
}
