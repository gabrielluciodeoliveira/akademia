<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastro</title>
    <link rel="stylesheet" href="./class/estilo.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inter&display=swap" rel="stylesheet">
</head>
<body>
    <header>
        <a href="index.html">Início</a>
        <a href="modalidade.php">Modalidades</a>
        <a href="">Planos</a>
        <a href="">Eventos</a>
        <a href="arearestrita.php">Área restrita</a>
        <a href="cadastro.php">Cadastre-se</a>
        <img src="./assets/img/Akademia (1) 1.png" alt="">
    </header>

    <section id="item">

        <h2>Cadastre-se aqui</h2>
        <form method="post" class="menu">
            <label for="">Nome:</label>
            <input type="text" name="nome" placeholder="Informe seu nome completo">

            <label for="">E-mail:</label>
            <input type="text" name="email" placeholder="Informe seu e-mail">

            <label for="">Data de nascimento:</label>
            <input type="text" name="dtNascimento" placeholder="Informe sua data de nascimento">

            <label for="">Cidade:</label>
            <input type="text" name="cidade" placeholder="Informe sua cidade">

            <label for="">Senha:</label>
            <input type="text" name="senha" placeholder="Informe sua senha">

            <label for="">Confirme sua senha:</label>
            <input type="text" name="senhaConfirma" placeholder="Repita a senha">

            <button name="Cadastrar">Cadastrar</button>

        </form>


        <div class="menu-img">
                <img src="./assets/img/total-shape-wXBK9JrM0iU-unsplash (1) 1.png" alt="" srcset="">
        </div>
    </section>


    <footer>
        <strong>Desenvolvido por Gabriel, 2023<br>Técnico em informática - Senac Santos</strong>
    </footer>

    <?php

        include_once("./class/Usuario.php");
        
            if (isset($_REQUEST["Cadastrar"]))
            {
                $u = New Usuario();
                $u->create($_REQUEST["nome"], $_REQUEST["email"], $_REQUEST["dtNascimento"], $_REQUEST["cidade"], $_REQUEST["senha"]);
                echo $u->inserirUsuario() == true 
                            ? "<p>Usuário cadastrado. </p>"
                            : "<p>Ocorreu um erro. </p>";
            }
    ?>
    
</body>
</html>