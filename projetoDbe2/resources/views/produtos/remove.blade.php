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
    <table>
        <tr>
            <td>
                <form action="{{ route('remove',$produto->id) }}" method='post'>
                    @csrf
                    <input type="submit" name='confirmar' value="Remover" />
                </form>
            </td>
            <td>
                <a href="/produtos"><button>Cancelar</button></a>
            </td>
        </tr>
    </table>
    @else
    <p>Produtos não encontrados! </p>
    @endif
    <a href="/produtos">&#9664;Voltar</a>
</body>

</html>