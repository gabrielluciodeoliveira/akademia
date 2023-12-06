<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<?php
    include_once("class/Usuario.php");
    $u = new Usuario();
    $u->atualizarUsuario($_GET["id"]);

    echo" 
    <form method='POST'>

    <label>Nome:</label>
    <input type='text' name='nome' value='".$u->getNome()."' required><br><br>

    <label>E-mail:</label>
    <input type='text' name='email' value='".$u->getEmail()."' required><br><br>

    <label>Cidade:</label>
    <input type='text' name='cidade' value='".$u->getCidade()."' required><br><br>

    <button type='submit' name='atualizar'>Atualizar</button>
    ";

    if (isset($_REQUEST["atualizar"]))
    {
        $u->setNome($_REQUEST["nome"]);

        $u->setEmail($_REQUEST["email"]);

        $u->setCidade($_REQUEST["cidade"]);

            echo $u->atualizarUsuario($_GET["id"]) == true ?

            
            "<p>Dados atualizados.</p>" :
            "<p>Ocorreu um erro</p>";
    }
?>

</body>
</html>