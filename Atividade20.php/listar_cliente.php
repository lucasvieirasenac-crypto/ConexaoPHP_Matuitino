<?php

include "Banco.php";

$sql = "SELECT * FROM form";

$resultado = $conexao ->query($sql);

while ($cliente = $resultado -> fetch_assoc()) {
    echo "Nome Completo:" .$cliente ['nome']. "<br>";
    echo "Idade:" .$cliente ['idade']. "<br>";
    echo "Email:".$cliente ["email"]."<br>";
    echo "Telefone:".$cliente ["telefone"]."<br>";
    echo "Cidade:".$cliente ["cidade"]."<br>";

    echo "<a href='editar_cliente.php?id=".$cliente['id']."'> <button> Atualizar </button> </a>";

    echo "<hr>";
}
?>