<?php

use App\Http\Controllers\CadastroController;
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

Route::get('/pagamento', function () {
    return view('pagamento');
})->name('pagamento');

Route::get('/agradecimento', function () {
    return view('agradecimento');
});

Route::post('/cadastro', [CadastroController::class, 'cadastrarCliente']);

