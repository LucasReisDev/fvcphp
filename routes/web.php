<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\CadastroController;
use App\Http\Controllers\CompraController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});


Route::get('/admin', [AdminController::class, 'listarClientes'])->name('admin');

Route::post('/testar-checkout-pagseguro', [CompraController::class, 'testarCheckoutPagSeguro'])->name('testar-checkout-pagseguro');

Route::get('/testar-checkout-pagseguro', [CompraController::class, 'testarCheckoutPagSeguro'])->name('testar-checkout-pagseguro');

Route::post('/inserir-cliente', [AdminController::class, 'inserirCliente'])->name('inserir.cliente');

Route::get('/agradecimento', function () {
    return view('agradecimento');
});
