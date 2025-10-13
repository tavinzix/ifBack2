<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lista de Usuários</title>
</head>

<body>
    @if($usuario)
    <h1>{{ $usuario->nome_completo }}</h1>
    <p>{{ $usuario->cpf }}</p>
    <ul>
        <li>Email: {{ $usuario->email }}</li>
        <li>Telefone: {{ $usuario->telefone }}</li>
        <li>Data de nascimento: {{ $usuario->dt_nasc}}</li>
    </ul>
    <table>
        <tr>
            <td>
                <form action="{{ route('removeUser',$usuario->id) }}" method='post'>
                    @csrf
                    <input type="submit" name='confirmar' value="Remover" />
                </form>
            </td>
            <td>
                <a href="/usuarios"><button>Cancelar</button></a>
            </td>
        </tr>
    </table>
    @else
    <p>Usuarios não encontrados! </p>
    @endif
    <a href="/produtos">&#9664;Voltar</a>
</body>

</html>