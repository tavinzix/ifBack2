<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>

<body>
    <h1>Insert new Produto</h1>
    <form action="{{route('update', $produto->id)}}" method="POST">
        @csrf
        <table>
            <tr>
                <td>Nome:</td>
                <td><input type="text" name="nome" value="{{$produto->nome}}" /></td>
            </tr>
            <tr>
                <td>Descricao:</td>
                <td><textarea name="descricao" id="" cols="30" rows="10">{{$produto->descricao}}</textarea></td>
            </tr>


            <tr>
                <td>marca:</td>
                <td><input name="marca" id="" type="text" value="{{$produto->marca}}"></input></td>
            </tr>

            <tr>
                <td>categoria id::</td>
                <td><input name="categoria_id" id="" type="text" value="{{$produto->categoria_id}}"></input></td>
            </tr>

            <tr>
                <td>Peso:</td>
                <td><input name="peso" id="" type="text" value="{{$produto->peso}}"></input></td>
            </tr>

            <tr>
                <td>Atributos (JSON):</td>
                <td>
                    <textarea name="atributos" cols="40" rows="3">
                    {{ $produto->atributos }}
                    </textarea>
                </td>
            </tr>
            <tr>
                <td>Dimensões (JSON):</td>
                <td>
                    <textarea name="dimensoes" cols="40" rows="3">
                    {{ $produto->dimensoes }}
                    </textarea>
                </td>
            </tr>

            <tr>
                <td>Quantidade em Estoque:</td>
                <td><input type="text" name="qtd_estoque" value="{{$produto->qtd_estoque}}" /></td>
            </tr>


            <tr>
                <td>Preço:</td>
                <td><input type="number" name="preco" step=".01" value="{{$produto->preco}}" /></td>
            </tr>
            <tr>
                <td>Importado:</td>
                <td><input type="checkbox" name="importado" {{($produto->importado)?'checked':''}} /></td>
            </tr>
            <tr align="center">
                <td colspan="2">
                    <input type="submit" value="Salvar" />
                    <a href="/produtos"><button form=cancel>Cancelar</button></a>
                </td>
            </tr>
        </table>
    </form>
</body>

</html>