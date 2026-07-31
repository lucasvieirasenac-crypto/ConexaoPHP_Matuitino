<?php 
include ("banco.php");

$nome_do_produto = $_POST['nome_do_produto']; 
$categoria = $_POST['categoria'];
$quantidade = $_POST['quantidade'];
$preco = $_POST['preco'];

$sql = "INSERT INTO  atualizar_produtos (nome_do_produto, categoria, quantidade, preco) 
VALUES ('$nome_do_produto', '$categoria', '$quantidade','$preco')";

if ($conexao->query($sql)) {
    echo "Dados salvos com sucesso no banco de dados.";
} else {
    echo "Erro ao salvar os dados: " . $conexao->error;
}
?>