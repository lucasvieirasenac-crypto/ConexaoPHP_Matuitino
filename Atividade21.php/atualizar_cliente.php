<?php 
include"banco.php";

$id = $_GET['id'];

$nome = $_POST['nome'];
$idade = $_POST['idade'];
$email = $_POST['email'];
$telefone = $_POST['telefone'];
$cidade = $_POST['cidade'];

$sql = "UPDATE form SET
nome = '$nome';
idade = '$idade';
email = '$email';
telefone = '$telefone';
cidade = '$cidade' WHERE id = $id
";
?>