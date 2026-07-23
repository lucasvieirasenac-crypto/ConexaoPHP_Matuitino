<!DOCTYPE html>
<html lang="Pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>formulario</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js" integrity="sha384-FKyoEForCGlyvwx9Hj09JcYn3nv7wiPVlz7YYwJrWVcXK/BmnVDxM+D2scQbITxI" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="./css/style.css">

</head>

<body>

    <form action="./salvar_livros.php" method="POST">

        <h1>Cadastrar Livros</h1>

        <div class="mb-3">
            <label for="exampleInputEmail1" class="form-label">Titulo do Livro</label>
            <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" name="titulo_do_Livro">
        </div>


        <div class="mb-3">
            <label for="exampleInputPassword1" class="form-label">Autor</label>
            <input type="text" class="form-control" id="exampleInputPassword1" name="autor">
        </div>

        <div class="mb-3">
            <label for="exampleInputPassword1" class="form-label">Editora</label>
            <input type="text" class="form-control" id="exampleInputPassword1" name="editora">
        </div>

        <div class="mb-3">
            <label for="exampleInputPassword1" class="form-label">Ano de Publicação</label>
            <input type="text" class="form-control" id="exampleInputPassword1" name="ano_de_publicacao">
        </div>

        <div class="mb-3">
            <label for="exampleInputPassword1" class="form-label">Quantidade de Paginas</label>
            <input type="text" class="form-control" id="exampleInputPassword1" name="quantidade_de_paginas">
        </div>

        <button type="submit" class="btn btn-primary">Enviar</button>
    </form>
</body>

</html>