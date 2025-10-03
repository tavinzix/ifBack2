<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lista de Usuarios</title>
</head>

<body>
    <h1>Usuarios</h1>
    @if ($listUsers->count() > 0)
    <table>
        <thead>
            <tr>
                <th>Id</th>
                <th>Nome</th>
                <th>CPF</th>
                <th>Telefone</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($listUsers as $user)
            <tr>
                <td><a href="usuarios/{{ $user->id }}">{{ $user->id }}</a></td>
                <td>{{ $user->nome_completo }}</td>
                <td>{{ $user->cpf }}</td>
                <td>{{ $user->telefone }}</td>
            </tr>
            @endforeach
        </tbody>
    </table>
    @else
    <p>Usuarios não encontrados! </p>
    @endif
</body>

</html>