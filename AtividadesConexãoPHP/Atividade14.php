<?php 
include "conexao.php";

$numero1 = 180;
$numero2 = 21;
$resultado = $numero1 - $numero2;

$sql = "INSERT INTO subtracao (numero1, numero2, resultado)
VALUES ($numero1, $numero2, $resultado)";

if ($conexao->query($sql)) {
    echo "<br> Dados Salvos com sucesso!";
} else {
    echo "<br> Erro ao salvar";
}
?>