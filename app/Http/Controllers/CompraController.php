<?php

namespace App\Http\Controllers;
use App\Models\Cliente;
use Illuminate\Http\Request;
use \GuzzleHttp\Client;
use Illuminate\Database\Eloquent\Model;

class CompraController extends Controller
{
    public function index()
    {
        return view('pagamento');
    }



public function testarCheckoutPagSeguro(Request $request)
{
    $client = new \GuzzleHttp\Client([
        'verify' => false, // Desabilitar a verificação SSL (apenas para ambiente de desenvolvimento)
    ]);
    $dadosCliente = $request->validate([
        'nome' => 'required',
        'email' => 'required|email',
        'cpf' => 'required|numeric',
        'ctt' => 'required', // Verifique se o campo está correto
    ]);

    try {
        $cliente = Cliente::create($dadosCliente);
        $response = $client->request('POST', 'https://sandbox.api.pagseguro.com/checkouts', [
            'body' => json_encode(array(
                "customer" => array(
                    "phone" => array(
                        "country" => "+55",
                        "area" =>"13",
                        "number" => $request->ctt
                    ),
                    "Name" => "teste",
                    "email" => $request->email,
                    "tax_id" => $request->cpf,
                ),
                "reference_id" => "REFERÊNCIA DO PRODUTO",
                "expiration_date" => "2024-02-20T19:09:10-03:00",
                "redirect_url"=>"https://pagseguro.uol.com.br",
                "customer_modifiable" => true,
                "items" => array(
                    0 => array(
                        "reference_id" => "E-Book",
                        "description" => "E-Book | FVC Consultoria",
                        "quantity" => 1,
                        "unit_amount" => 2999,
                        "name" => "E-Book"
                    )
                )
            ), JSON_UNESCAPED_UNICODE),
            'headers' => [
                'Authorization' => 'Bearer EB0181986A27440FAB1822445585C884',
                'Content-type' => 'application/json',
                'accept' => 'application/json',
                //'Access-Control-Allow-Origin' => '*',
            ],
        ]);

        // Decodifique a resposta JSON
        $responseData = json_decode($response->getBody(), true);
        //dd($responseData);


        // Verifique se há um link de pagamento na resposta
        if (isset($responseData['links'][1]['href'])) {
            print_r($responseData['links'][1]['href']);

        } else {
            return response()->json(['error' => 'Verifique novamente os dados inseridos']);
        }
    } catch (\GuzzleHttp\Exception\RequestException $e) {
        return response()->json(['error' => 'Verifique novamente os dados inseridos']);

    }
}

}


