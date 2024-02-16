<?php

namespace App\Http\Controllers;

use App\Models\Cliente; // Certifique-se de importar o modelo Cliente
use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function index(Request $request) 
    {
        $dadosCliente = $request->validate([
            'nome' => 'required',
            'email' => 'required|email',
            'cpf' => 'required|numeric',
        ]);

        // Adicione 'status' com valor padrão 'pendente'
        $dadosCliente['status'] = 'pendente';

        Cliente::create($dadosCliente);

        return redirect()->back()->with('success', 'Cliente inserido com sucesso!');
    }

    public function listarClientes()
{
    $clientes = Cliente::all(); // Obtém todos os clientes do banco de dados
    return view('admin', compact('clientes'));
}
}
