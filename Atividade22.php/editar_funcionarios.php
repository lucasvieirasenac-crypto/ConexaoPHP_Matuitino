<?php 
include"banco.php";

$id = $_GET['id'];

$sql = "SELECT * FROM funcionarios WHERE id = $id";

$resultado =$conexao->query($sql);

$funcionarios = $resultado->fetch_assoc();


?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>formulario</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js" integrity="sha384-FKyoEForCGlyvwx9Hj09JcYn3nv7wiPVlz7YYwJrWVcXK/BmnVDxM+D2scQbITxI" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="./css/style.css">

</head>

<body>

    <form action="./atualizar_funcionarios.php" method="POST">

        <h1>Atualiza funcionarios</h1>

        <div class="mb-3">
            <input type="hidden" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" name="id" value="<?php echo $funcionarios['id']?>">
        </div>


        <div class="mb-3">
            <label for="exampleInputEmail1" class="form-label">Nome Completo</label>
            <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" name="nome_completo" value="<?php echo $funcionarios['nome_completo']?>">
        </div>


        <div class="mb-3">
            <label for="exampleInputPassword1" class="form-label">Cargo</label>
            <input type="text" class="form-control" id="exampleInputPassword1" name="cargo" value="<?php echo $funcionarios['cargo']?>">
        </div>

        <div class="mb-3">
            <label for="exampleInputPassword1" class="form-label">Departamento</label>
            <input type="text" class="form-control" id="exampleInputPassword1" name="departamento" value="<?php echo $funcionarios['departamento']?>">
        </div>

        <div class="mb-3">
            <label for="exampleInputPassword1" class="form-label">Salário</label>
            <input type="tel" class="form-control" id="exampleInputPassword1" name="salario" value="<?php echo $funcionarios['salario']?>">
        </div>

        <div class="mb-3">
            <label for="exampleInputPassword1" class="form-label">Data de Admissão</label>
            <input type="text" class="form-control" id="exampleInputPassword1" name="data_de_admissão" value="<?php echo $funcionarios['data_de_admissão']?>">
        </div>

        <button type="submit" class="btn btn-primary">Enviar</button>
    </form>
</body>

</html>