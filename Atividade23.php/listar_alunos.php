<?php

include "banco.php";

$sql = "SELECT * FROM alunos";

$resultado = $conexao->query($sql);

while ($alunos = $resultado->fetch_assoc()) {
    echo "Nome:" . $alunos['nome'] . "<br>";
    echo "Idade:" . $alunos['idade'] . "<br>";
    echo "Curso:" . $alunos["curso"] . "<br>";
    echo "Cidade:" . $alunos["cidade"] . "<br>";

    echo "<a href='formulario.php?id=" . $alunos['id'] . "'> <button> Cadastrar </button> </a>";
    echo "<a href='editar_alunos.php?id=" . $alunos['id'] . "'> <button> Editar </button> </a>";
    echo "<a href='excluir_alunos.php?id=" . $alunos['id'] . "'> <button> Excluir </button> </a>";


    echo "<hr>";
}
