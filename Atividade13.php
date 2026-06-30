<?php 

$numero1 = 18;
$numero2 = 20;
$numero3 = 9;
$resultado = $numero1 * $numero2 * $numero3;

$sql = "INSERT INTO calculo (numero1, numero2, numero3, resultado)
VALUES ($numero1, $numero2, $numero3, $resultado)";

if ($conexao->query($sql)) {
    echo "Dados Salvos com sucesso!";
} else {
    echo "Erro ao salvar";
}




?>