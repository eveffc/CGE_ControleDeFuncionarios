<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Controle de Funcionarios - CGE</title>
        <link rel="stylesheet" href="/css/app.css">
        <link rel="stylesheet" href="/css/showemployee.css">

    </head>
    <body>
        <header></header>
            <div class="LButton">
                <a class="link" href="/promocao">Nova promoção</a>
            </div>
            <div class="container">
            {{-- @foreach ($employees as $employee)
                <h1>{{$employee -> nome}}</h1>
            @endforeach --}}
            <table>
                <tr>
                    @foreach ($stories as $storie)
                    <td>
                        <p>{{$storie -> cargo}}</p>
                        <p>{{$storie -> data_promocao}}</p>
                        <p>{{$storie -> salario}}</p>
                    </td>
                    @endforeach
                </tr>
            </table>
        </div>
    </body>
</html>