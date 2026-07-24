<?php 
include"banco.php";

$id = $_POST['id'];

$nome_completo = $_POST['nome_completo'];
$cargo = $_POST['cargo'];
$departamento = $_POST['departamento'];
$salario = $_POST['salario'];
$data_de_admissão = $_POST['data_de_admissão'];

$sql = "UPDATE funcionarios SET
nome_completo = '$nome_completo',
cargo = '$cargo',
departamento = '$departamento',
salario = '$salario',
data_de_admissão = '$data_de_admissão' WHERE id = $id ";

if($conexao->query($sql)){
header("location:listar_funcionarios.php");

exit();
}else {
    echo"Erro ao atualizar o cliente";

}



?>