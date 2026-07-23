<?php 
include "banco.php";
$titulo_do_Livro = $_POST["titulo_do_Livro"];
$autor = $_POST["autor"];
$editora = $_POST["editora"];
$ano_de_publicacao = $_POST["ano_de_publicacao"];
$quantidade_de_paginas = $_POST["quantidade_de_paginas"];

$sql = "INSERT INTO livros(titulo_do_Livro, autor, editora, ano_de_publicacao, quantidade_de_paginas)
VALUES('$titulo_do_Livro', '$autor', '$editora', '$ano_de_publicacao', '$quantidade_de_paginas' )";

if ($conexao->query($sql)) {
    echo "Dados salvos com sucesso!";
}
else{
    echo "Erro ao salvar os dados!";
}
?>