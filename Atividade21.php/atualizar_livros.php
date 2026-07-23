<?php
include "banco.php";

$id = $_POST['id'];
$titulo_do_Livro = $_POST['titulo_do_Livro'];
$autor = $_POST['autor'];
$editora = $_POST['editora'];
$ano_de_publicacao = $_POST['ano_de_publicacao'];
$quantidade_de_paginas = $_POST['quantidade_de_paginas'];

$sql = "UPDATE livros SET 
titulo_do_Livro = '$titulo_do_Livro', 
autor = '$autor', 
editora = '$editora', 
ano_de_publicacao = '$ano_de_publicacao', 
quantidade_de_paginas = '$quantidade_de_paginas' WHERE id = $id ";

if ($conexao->query($sql)) {
    header("location:listar_livros.php");
    exit();
} else {
    echo "Erro ao atualizar o livros";
}
