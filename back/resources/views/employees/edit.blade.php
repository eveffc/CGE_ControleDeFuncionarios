<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title></title>
        <link rel="stylesheet" href="/css/app.css">
        <link rel="stylesheet" href="/css/editemployee.css">

    </head>
    <body>
        <header></header>
        <form action="/employees/update/{{$employee -> id}}" method="PUT" enctype="multipart/form-data">
            @csrf
            @method('PUT')
            <h1>Editar colaborador</h1>
            <div class="name">
                <div class="title">
                    <label>Nome</label>
                    <input type="text" id="nome" name="nome" value="{{ $employee->nome}}" required>
                </div>
                <div class="title">
                    <label>Matricula</label>
                    <input type="text" id="matricula" name="matricula" value="{{ $employee->matricula}}" required>
                </div>
            </div>
            <div class="function">
                <label>cargo</label>
                <input type="text" id="cargo" name="cargo" value="{{ $employee->cargo}}" required>

            </div>
            <div class="info">
                <div class="title">
                    <label>Salário</label>
                    <input type="number"  id="salario" name="salario" value="{{ $employee->salario}}" required>
                </div>
                <div class="title">
                    <label>Data da promoção</label>
                    <input type="date"  id="data_promocao" name="data_promocao" value="{{ $employee->data_promocao}}" required>
                </div>
            </div>
            <div class="actions">
                <button class="button" type="submit">Editar</button>
                <a href="/">cancelar</a>
            </div>
        </form>
    </body>
</html>