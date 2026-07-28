<?php 
include "banco.php";

$id = $_GET['id'];

$sql = "DELETE FROM alunos WHERE id = $id";

if ($conexao->query($sql)) {
    header("location:listar_alunos.php");
    exit();
} else {
    echo "Erro ao atualizar o aluno";
}

?>