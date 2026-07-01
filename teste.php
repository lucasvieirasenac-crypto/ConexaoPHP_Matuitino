<?php 
//inclui um arquivo responsavel pela conexao com o banco de dados
include_once("conexao.php");

$numero1 = 20;
$numero2 = 21;
$resultado = $numero1 + $numero2;

//Montar o spl
$sql = "INSERT INTO calculo (numero1, numero2, resultado) 
VALUES ($numero1, $numero2, $resultado)";

//Se e senão
if ($conexao->query($sql)) {
    echo "Dados Salvos com sucesso!";
} else {
    echo "Erro ao salvar";
}
?>