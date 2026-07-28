<?php
include "banco.php";

$id = $_POST['id'];
$nome = $_POST['nome'];
$idade = $_POST['idade'];
$curso = $_POST['curso'];
$cidade = $_POST['cidade'];

$sql = "UPDATE alunos SET 
nome = '$nome', 
idade = '$idade', 
curso = '$curso', 
cidade = '$cidade' WHERE id = $id ";

if ($conexao->query($sql)) {
    header("location:listar_alunos.php");
    exit();
} else {
    echo "Erro ao atualizar o aluno";
}
