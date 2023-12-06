<?php
    include_once("class/Usuario.php");
    $p = new Usuario();

    $p->excluirUsuario($_GET["id"]);
    echo "Usuário excluído";
?>

<a href="listarUsuario.php">Voltar</a>