<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Área Restrita</title>
    <link rel="stylesheet" href="./class/estilo.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inter&display=swap" rel="stylesheet"></head>
<body>

    <?php
    include_once('class/Usuario.php');
    ?>

    <header>
        <a href="index.html">Início</a>
        <a href="">Modalidades</a>
        <a href="">Planos</a>
        <a href="">Eventos</a>
        <a href="arearestrita.php">Área restrita</a>
        <a href="cadastro.php">Cadastre-se</a>
        <img src="./assets/img/Akademia (1) 1.png" alt="">
    </header>

    <section id="item">

        <h2>Área Restrita</h2>
        <form class="menu">
            <label for="">E-mail:</label>
            <input type="text" name="email" placeholder="Informe seu e-mail de cadastro">

            <label for="">Senha:</label>
            <input type="text" name="senha" placeholder="Informe sua senha">

            <button type="submit" name="acessar">Entrar</button>

            <a href="">Esqueceu sua senha? Clique aqui.</a>

            <a href="">Não tem cadastro? Cadastre-se aqui.</a>

        </form>

        <div class="menu-img">
            <img src="./assets/img/femea-com-cabelo-curto-fazendo-pull-ups-em-um-clube-de-ginastica 1.png" alt="" srcset="">
        </div> 
        </section>
    <footer>
        <strong>Desenvolvido por Gabriel, 2023<br>Técnico em informática - Senac Santos</strong>
    </footer>

    <?php

if (isset($_REQUEST["acessar"]))
    {
        $u = new Usuario();
        $u->autenticarUsuario($_REQUEST["email"], $_REQUEST["senha"]);

        if ($u->autenticarUsuario() == 0)
        {
            echo "<p>Usuário e/ou senha incorreto(s).</p>";                   
        }
        else {
          
            $cookieName = "nome";
            $cookieValue = $u->getUsuario();
            setcookie($cookieName, $cookieValue, time() + 86400, "/");
            header("Location: login.php");
        }
    }  


?>

</body>
</html>
