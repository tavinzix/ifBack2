<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lista de Vendedores</title>
</head>

<body>
    <h1>{{ $vendedores->nome_loja }}</h1>
    <p>{{ $vendedores->descricao}}</p>
    <ul>
        <li>Email: {{ $vendedores->email }}</li>
        <li>CNPJ: {{ $vendedores->cnpj }}</li>
        <li>Categoria: {{ $vendedores->categoria }}</li>
        <li>Cidade: {{ $vendedores->cidade }}/{{ $vendedores->estado }}</li>
    </ul>

    <a href="/vendedores">Voltar</a>
</body>

</html>