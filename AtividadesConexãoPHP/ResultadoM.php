<!DOCTYPE html>
<html lang="Pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Resultado</title>
    <link href="stylesheet" rel="./css/style.css">
</head>
<body>
    h1>Resultado da Multiplicação</h1>
    <p>
        <?php 
        include "conexao.php";

        $num1 = $_POST['numero1'];
        $num2 = $_POST['numero2'];
        $multiplicacao = $num1 * $num2;

        $spl = "INSERT INTO multiplicacao (numero1, numero2, resultado)
VALUES ($num1, $num2, $multiplicacao)";

        $conexao->query($sql);

        echo "O resultado do primeiro: $num1 e do segundo: $num2 é: $multiplicacao";
        ?>
    </p>
</body>
</html>