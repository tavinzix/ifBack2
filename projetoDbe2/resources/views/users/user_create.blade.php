<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>

<body>
    <h1>Insert new Usuario</h1>
    <form action="/usuario" method="POST">
        @csrf
        {{-- <input type="hidden" name="_token" value="{{csrf_token()}}"/> --}}
        <table>
            <tr>
                <td>Nome completo:</td>
                <td><input type="text" name="nome" /></td>
            </tr>
            <tr>
                <td>Email:</td>
                <td><input type="text" name="email"></input></td>
            </tr>
            <tr>
                <td>CPF:</td>
                <td><input name="cpf" id=""></input></td>
            </tr>
            <tr>
                <td>Senha</td>
                <td><input type="password" name="senha" id=""></input></td>
            </tr>   
            <tr>
                <td>Telefone:</td>
                <td><input name="telefone" id=""></input></td>
            </tr>

            <tr>
                <td>Data de nascimento:</td>
                <td><input type="date" name="dt_nasc" /></td>
            </tr>
            <tr align="center">
                <td colspan="2"><input type="submit" value="Criar" /></td>
            </tr>
            <tr align="center">
                <td colspan="2"><a href="/usuarios" style="display: inline">&#9664;&nbsp;Voltar</a></td>
            </tr>
        </table>
    </form>
</body>

</html>