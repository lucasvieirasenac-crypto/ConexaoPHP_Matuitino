<?php

include "banco.php";


$nome = $_POST['nome'];
$idade = $_POST['idade'];
$curso = $_POST['curso'];
$cidade = $_POST['cidade'];


$sql = "INSERT INTO alunos (nome, idade, curso, cidade)
VALUES ('$nome', $idade, '$curso', '$cidade')";


if ($conexao->query($sql)) {
    echo "Dados salvos com sucesso no banco de dados.";
} else {
    echo "Erro ao salvar os dados: " . $conexao->error;
}
?>