<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lista de Usuarios</title>
</head>

<body>
        <h1>{{ $user->nome_completo }}</h1>
        <p>{{ $user->email }}</p>
        <ul>
            <li>CPF: {{ $user->cpf }}</li>
            <li>Data de Nascimento: {{ $user->dt_nasc }}</li>
        </ul>

        <a href="/usuarios">Voltar</a>
</body>

</html>