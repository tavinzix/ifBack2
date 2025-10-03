<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lista de Vendedores</title>
</head>

<body>
    <h1>Vendedores</h1>
    @if ($listVendedores->count() > 0)
    <table>
        <thead>
            <tr>
                <th>Id</th>
                <th>Nome</th>
                <th>CNPJ</th>
                <th>Telefone</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($listVendedores as $vendedores)
            <tr>
                <td><a href="vendedores/{{ $vendedores->id }}">{{ $vendedores->id }}</a></td>
                <td>{{ $vendedores->nome_loja }}</td>
                <td>{{ $vendedores->cnpj}}</td>
                <td>{{ $vendedores->telefone }}</td>
            </tr>
            @endforeach
        </tbody>
    </table>
    @else
    <p>Usuarios não encontrados! </p>
    @endif
</body>

</html>