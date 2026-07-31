<?php 
include"banco.php";

$id = $_POST['id'];

$nome_do_produto = $_POST['nome_do_produto'];
$categoria = $_POST['categoria'];
$quantidade = $_POST['quantidade'];
$preco = $_POST['preco'];

$sql = "UPDATE atualizar_produtos SET
nome_do_produto = '$nome_do_produto',
categoria = '$categoria',
quantidade = '$quantidade',
preco = '$preco' WHERE id = $id ";

if($conexao->query($sql)){
header("location:listar_produtos.php");

exit();
}else {
    echo"Erro ao atualizar o produto";

}



?>