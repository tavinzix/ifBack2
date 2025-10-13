<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lista de Usuários</title>
</head>

<body>
    @if($vendedor)
    <h1>{{ $vendedor->nome_loja }}</h1>
    <p>{{ $vendedor->cnpj }}</p>
    <ul>
        <li>Descrição: {{ $vendedor->descricao_loja }}</li>
        <li>Telefone: {{ $vendedor->telefone }}</li>
        <li>Localização: {{ $vendedor->cidade}} / {{ $vendedor->estado}} </li>
    </ul>
    <table>
        <tr>
            <td>
                <form action="{{ route('removeVendedor',$vendedor->id) }}" method='post'>
                    @csrf
                    <input type="submit" name='confirmar' value="Remover" />
                </form>
            </td>
            <td>
                <a href="/vendedores"><button>Cancelar</button></a>
            </td>
        </tr>
    </table>
    @else
    <p>Usuarios não encontrados! </p>
    @endif
    <a href="/produtos">&#9664;Voltar</a>
</body>

</html>