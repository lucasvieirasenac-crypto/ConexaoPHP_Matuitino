<?php

include "Banco.php";

$sql = "SELECT * FROM livros";

$resultado = $conexao ->query($sql);

while ($livros = $resultado -> fetch_assoc()) {
    echo "titulo_do_Livro:" .$livros ['titulo_do_Livro']."<br>";
    echo "autor:" .$livros ['autor']. "<br>";
    echo "editora:".$livros ["editora"]."<br>";
    echo "ano_de_publicacao:".$livros ["ano_de_publicacao"]."<br>";
    echo "quantidade_de_paginas:".$livros ["quantidade_de_paginas"]."<br>";

    echo "<a href='editar_livros.php?id=".$livros['id']."'> <button> Atualizar </button> </a>";

    echo "<hr>";
}
?>