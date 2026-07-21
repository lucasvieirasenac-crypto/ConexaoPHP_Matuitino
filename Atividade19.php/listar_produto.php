<?php 
include "Banco.php";

$sql = "SELECT * FROM produto";

$resultado = $conexao->query($sql);

while ($produto = $resultado -> fetch_assoc()) {
    echo "Nome Produto:" .$produto ['nome']. "<br>";
    echo "Quantidade:" .$produto ['quantidade']. "<br>";
    echo "Preco:" .$produto ['preco']. "<br>";
}
?>