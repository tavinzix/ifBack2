<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lista de Produtos</title>
</head>

<body>
    @if($produto)
    <h1>{{ $produto->nome }}</h1>
    <p>{{ $produto->descricao }}</p>
    <ul>
        <li>Categoria: {{ $produto->categoria_id }}</li>
        <li>Marca: {{ $produto->marca }}</li>
        <li>Peso: {{ $produto->peso}}</li>
        <li>Atributos: {{ $produto->atributos}}</li>
        <li>Dimensoes: {{ $produto->dimensoes}}</li>
    </ul>

    <a href="/produtos">Voltar</a>
    @else
    <p>Produto não encontrado</p>
    @endif

</body>

</html>