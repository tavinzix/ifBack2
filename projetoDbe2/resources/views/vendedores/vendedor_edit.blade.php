<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>

<body>
    <h1>Atualizar Vendedor</h1>
    <form action="{{route('updateVendedor', $vendedor->id)}}" method="POST">
        @csrf 
        <table>
            <tr>
                <td>Nome loja:</td>
                <td><input type="text" name="nome_loja" value="{{$vendedor->nome_loja}}" /></td>
            </tr>
            <tr>
                <td>Descricao:</td>
                <td><input name="descricao_loja" id="" value="{{$vendedor->descricao_loja}}"></input></td>
            </tr>
            <tr>
                <td>Telefone:</td>
                <td><input name="telefone" id="" type="text" value="{{$vendedor->telefone}}"></input></td>
            </tr>
            <tr>
                <td>CEP:</td>
                <td><input name="cep" id="" type="text" value="{{$vendedor->cep}}"></input></td>
            </tr>
            <tr>
                <td>Estado:</td>
                <td><input name="estado" id="" type="text" value="{{$vendedor->estado}}"></input></td>
            </tr>
            <tr>
                <td>Cidade:</td>
                <td><input name="cidade" id="" type="text" value="{{$vendedor->cidade}}"></input></td>
            </tr>
            <tr>
                <td>Bairro:</td>
                <td><input name="bairro" id="" type="text" value="{{$vendedor->bairro}}"></input></td>
            </tr>
            <tr>
                <td>Rua:</td>
                <td><input name="rua" id="" type="text" value="{{$vendedor->rua}}"></input></td>
            </tr>
            <tr>
                <td>Numero:</td>
                <td><input name="numero" id="" type="text" value="{{$vendedor->numero}}"></input></td>
            </tr>

            <tr align="center">
                <td colspan="2">
                    <input type="submit" value="Salvar" />
                    <a href="/vendedores"><button form=cancel>Cancelar</button></a>
                </td>
            </tr>
        </table>
    </form>
</body>

</html>