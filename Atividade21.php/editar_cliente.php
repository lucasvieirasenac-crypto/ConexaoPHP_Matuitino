<?php 
include"banco.php";

$id = $_GET['id'];

$sql = "SELECT * FROM form WHERE id = $id";

$resultado =$conexao->query($sql);

$cliente = $resultado->fetch_assoc();


?>