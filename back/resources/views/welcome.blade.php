<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
 <html>
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Controle de Funcionarios - CGE</title>
        <link rel="stylesheet" href="/css/app.css">

    </head>
    <body>
        <header></header>
        <div class="LButton">
            <a class="link" href="/novo.funcionario">Novo Cadastro</a>
        </div>
        <table>
            <tr>
                @foreach ($employees as $employee)
                <td>
                    <p>{{$employee -> nome}}</p>
                    <p>{{$employee -> cargo}}</p>
                </td>
                @endforeach
            <tr>
        </table>
    </body>
</html>
