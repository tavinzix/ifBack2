<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>

<body>
    <h1>Atualizar usuário</h1>
    <form action="{{route('updateUser', $usuario->id)}}" method="POST">
        @csrf
        <table>
            <tr>
                <td>Nome:</td>
                <td><input type="text" name="nome" value="{{$usuario->nome_completo}}" /></td>
            </tr>
            <tr>
                <td>Email:</td>
                <td><input name="email" id="" value="{{$usuario->email}}"></input></td>
            </tr>

            <tr>
                <td>Senha:</td>
                <td><input name=" senha" id="" type="text" value="{{$usuario->senha}}"></input></td>
            </tr>

            <tr>
                <td>Telefone:</td>
                <td><input name="telefone" id="" type="text" value="{{$usuario->telefone}}"></input></td>
            </tr>

            <tr align="center">
                <td colspan="2">
                    <input type="submit" value="Salvar" />
                    <a href="/usuarios"><button form=cancel>Cancelar</button></a>
                </td>
            </tr>
        </table>
    </form>
</body>

</html>