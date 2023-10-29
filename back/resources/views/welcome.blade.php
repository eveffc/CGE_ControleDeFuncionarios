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
                {{-- Botão de delete --}}
                <form action="/employees/{{ $employee->id }}" method="POST">
                    @csrf
                    @method('DELETE')<button type="submit">Excluir</button>
                </form>
                {{-- Botão editar --}}
                <button type="submit">Editar</button>
                {{-- Botão de promoção --}}
                <a class="promove" href="/promocao" type="submit">Promover</a>
            
            </td>
            @endforeach

        </table>
    </body>
</html>
