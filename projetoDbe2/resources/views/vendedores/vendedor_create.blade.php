<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>

<body>
    <h1>Insert new Vendedor</h1>
    <form action="/vendedor" method="POST">
        @csrf
        {{-- <input type="hidden" name="_token" value="{{csrf_token()}}"/> --}}
        <table>
            <tr>
                <td>User id:</td>
                <td><input type="text" name="user_id" /></td>
            </tr>
            <tr>
                <td>Nome loja:</td>
                <td><input type="text" name="nome_loja"></input></td>
            </tr>
            <tr>
                <td>CNPJ:</td>
                <td><input name="cnpj" id=""></input></td>
            </tr>
            <tr>
                <td>Descrição loja:</td>
                <td><input name="descricao_loja" id=""></input></td>
            </tr>
            <tr>
                <td>Email:</td>
                <td><input name="email" id=""></input></td>
            </tr>
            <tr>
                <td>Telefone:</td>
                <td><input name="telefone" id=""></input></td>
            </tr>
            <tr>
                <td>Categoria:</td>
                <td><input name="categoria" id=""></input></td>
            </tr>
            <tr>
                <td>CEP:</td>
                <td><input name="cep" id=""></input></td>
            </tr>
            <tr>
                <td>Estado:</td>
                <td><input name="estado" id=""></input></td>
            </tr>
            <tr>
                <td>Cidade:</td>
                <td><input name="cidade" id=""></input></td>
            </tr>
            <tr>
                <td>Bairro:</td>
                <td><input name="bairro" id=""></input></td>
            </tr>
            <tr>
                <td>Rua:</td>
                <td><input name="rua" id=""></input></td>
            </tr>
            <tr>
                <td>Numero:</td>
                <td><input name="numero" id=""></input></td>
            </tr>
            <tr align="center">
                <td colspan="2"><input type="submit" value="Criar" /></td>
            </tr>
            <tr align="center">
                <td colspan="2"><a href="/vendedores" style="display: inline">&#9664;&nbsp;Voltar</a></td>
            </tr>
        </table>
    </form>
</body>

</html>