<?php 
include"banco.php";

$id = $_GET['id'];

$sql = "DELETE FROM atualizar_produtos WHERE id = $id";

if($conexao->query($sql)){
header("location:listar_produtos.php");

exit();
}else {
    echo"Erro ao excluir o produto";

}



?>