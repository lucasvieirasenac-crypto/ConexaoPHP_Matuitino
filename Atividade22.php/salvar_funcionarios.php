<?php 
include "banco.php";

$nome_completo = $_POST["nome_completo"];
$cargo = $_POST["cargo"];
$departamento = $_POST["departamento"];
$salario = $_POST["salario"];
$data_de_admissão = $_POST["data_de_admissão"];

$sql = "INSERT INTO funcionarios(nome_completo, cargo, departamento, salario, data_de_admissão)
VALUES('$nome_completo', '$cargo ', '$departamento', '$salario', '$data_de_admissão' )";

if ($conexao->query($sql)) {
    echo "Dados salvos com sucesso!";
}
else{
    echo "Erro ao salvar os dados!";
}
?>