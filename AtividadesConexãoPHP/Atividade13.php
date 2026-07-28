<?php 
include "conexao.php";

$numero1 = 18;
$numero2 = 20;
$numero3 = 9;
$resultado = $numero1 * $numero2 * $numero3;

$sql = "INSERT INTO multiplicacao  (numero1, numero2, numero3, resultado)
VALUES ($numero1, $numero2, $numero3, $resultado)";

if ($conexao->query($sql)) {
    echo "<br> Dados Salvos com sucesso!";
} else {
    echo "<br> Erro ao salvar";
}




?>