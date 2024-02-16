<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdn.datatables.net/1.10.22/css/jquery.dataTables.min.css">
    <!-- Adicione esse script na seção head após o Bootstrap -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.datatables.net/1.10.22/js/jquery.dataTables.min.js"></script>
</head>
<body>


<div class="container mt-4">
        <div class="row justify-content-between align-items-center mb-4">
            <div class="col-auto">
                <h1>Dados dos Clientes</h1>
            </div>
            <div class="col-auto">
                <img src="/img/logos/logo.png" alt="Logo" style="width: 100px;">
            </div>
        </div>

        <table id="clientesTable" class="table table-striped table-bordered">
    <thead>
        <tr>
            <th>ID</th>
            <th>Nome</th>
            <th>Email</th>
            <th>CPF</th>
            <th>Status</th>
        </tr>
    </thead>
    <tbody>
        @foreach($clientes as $cliente)
            <tr>
                <td>{{ $cliente->id }}</td>
                <td>{{ $cliente->nome }}</td>
                <td>{{ $cliente->email }}</td>
                <td>{{ $cliente->cpf }}</td>
                <td>{{ $cliente->pagamento_status }}</td>
            </tr>
        @endforeach
    </tbody>
</table>
    </div>

    <script>
        $(document).ready(function () {
            $('#clientesTable').DataTable();
        });
    </script>


</body>
</html>
