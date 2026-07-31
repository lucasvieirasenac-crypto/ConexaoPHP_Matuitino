<?php

include "banco.php";

$sql = "SELECT * FROM atualizar_produtos";

$resultado = $conexao->query($sql);

while ($produtos = $resultado->fetch_assoc()) {
    echo "nome_do_produto: " . $produtos['nome_do_produto'] . "<br>";
    echo "categoria: " . $produtos['categoria'] . "<br>";
    echo "quantidade: " . $produtos['quantidade'] . "<br>";
    echo "preco: " . $produtos['preco'] . "<br>";



    echo "<a href='formulario.php?id=" . $produtos['id'] . "'> <button> Cadastratar </button> </a>";
    echo "<a href='editar_produtos.php?id=" . $produtos['id'] . "'> <button> Atualizar </button> </a>";
    echo "<a href='excluir_produtos.php?id=" . $produtos['id'] . "'> <button> Excluir </button> </a>";

    echo "<hr>";
}