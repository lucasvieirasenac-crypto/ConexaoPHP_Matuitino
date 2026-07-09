<?php
//sql listar os arquivos do banco de dados 
include "Banco.php";

//sql listar os arquivos do banco de dados 
$sql = "SELECT * FROM form";

//guardar variavel resultado a consulta do banco de dados
$resultado = $conexao ->query($sql);

//iremos usar um laço de repetição while(enquanto)
while ($cliente = $resultado -> fetch_assoc()) {
    echo "Nome Completo:" .$cliente ['nome']. "<br>";
    echo "Cidade:" .$cliente ['cidade']. "<br>";

}
?>