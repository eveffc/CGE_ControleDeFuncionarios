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

                @foreach ($employees as $employee)
                <td>
                    <a href="/funcionario">
                        <p class="nome">{{$employee -> nome}}</p>
                        <p class="cargo">{{$employee -> cargo}}</p>
                    </a>
    
                    <button type="submit" type="submit">Excluir</button>
                     <button type="submit" type="submit">Editar</button>
                    <a class="promove" href="/promocao" type="submit">Promover</a>
                   
                </td>
                @endforeach

        </table>
    </body>
</html>
