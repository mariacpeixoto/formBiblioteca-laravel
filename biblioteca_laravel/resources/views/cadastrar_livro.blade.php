<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">

        <title>Biblioteca</title>

    </head>
    <body>
        <h1>Cadastrar Livros</h1>
        <form action="/cadastrar-livro" method="POST">
            @csrf
            <label for="lblTitulo">Título do Livro:</label>
            <input type="text" name="titulo">
            <br><br>
            <label for="lblAutor">Autor do Livro:</label>
            <input type="text" name="autor">
            <br><br>
            <button type="submit">cadastrar</button>
        </form>
    </body>
</html>
