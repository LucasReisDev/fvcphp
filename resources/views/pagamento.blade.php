<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Fvc - Pagamento</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f8f9fa;
        }

        .container {
            margin-top: 50px;
        }

        .card {
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
        }

        .card-header {
            background-color: #007bff;
            color: #fff;
        }

        .card-body {
            padding: 20px;
        }

        .form-group {
            margin-bottom: 20px;
        }

        #camposPix,
        #camposCartao {
            display: none;
        }
    </style>
</head>
</head>
<body>
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Página de Pagamento</div>

                <div class="card-body">
                    <h5>Escolha o método de pagamento:</h5>

                    <form action="{{ route('pagamento') }}" method="get">
                    @csrf
                    <div class="form-group">
                        <label for="metodoPagamento">Método de Pagamento:</label>
                        <select name="metodoPagamento" id="metodoPagamento" class="form-control" required>
                            <option value="pix">Pix</option>
                            <option value="cartao">Cartão de Crédito</option>
                        </select>
                    </div>

                    <!-- Campos específicos para Pix -->
                    <div class="form-group" id="camposPix" style="display:none;">
                        <label for="chavePix">Chave Pix:</label>
                        <input type="text" name="chavePix" id="chavePix" class="form-control">
                    </div>

                    <!-- Campos específicos para Cartão de Crédito -->
                    <div class="form-group" id="camposCartao" style="display:none;">
                        <label for="numeroCartao">Número do Cartão:</label>
                        <input type="text" name="numeroCartao" id="numeroCartao" class="form-control">
                        <!-- Adicione outros campos para data de validade, código de segurança, etc. -->
                    </div>

                    <button type="submit" class="btn btn-primary">Pagar</button>
                </form>
                </div>
            </div>
        </div>
    </div>
</div>

<script>
document.addEventListener('DOMContentLoaded', function() {
    // Adicionar lógica para mostrar/ocultar campos específicos com base no método de pagamento escolhido
    document.getElementById('metodoPagamento').addEventListener('change', function() {
        var camposPix = document.getElementById('camposPix');
        var camposCartao = document.getElementById('camposCartao');

        if (this.value === 'pix') {
            camposPix.style.display = 'block';
            camposCartao.style.display = 'none';
        } else if (this.value === 'cartao') {
            camposPix.style.display = 'none';
            camposCartao.style.display = 'block';
        } else {
            camposPix.style.display = 'none';
            camposCartao.style.display = 'none';
        }
    });
});
</script>
</body>
</html>
