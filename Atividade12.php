<?php 
include "conexao.php";

$numero1 = 18;
$numero2 = 20;
$resultado = $numero1 + $numero2;

$sql = "INSERT INTO soma (numero1, numero2, resultado)
VALUES ($numero1, $numero2, $resultado)";

if ($conexao->query($sql)) {
    echo "<br> Dados Salvos com sucesso!";
} else {
    echo "<br> Erro ao salvar";
}

?>