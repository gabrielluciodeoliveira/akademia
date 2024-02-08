<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Modalidades</title>
    <link rel="stylesheet" href="./class/mod.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inter&display=swap" rel="stylesheet">
</head>
<body>
    <header>
        <a href="index.html">Início</a>
        <a href="modalidades.html">Modalidades</a>
        <a href="">Planos</a>
        <a href="">Eventos</a>
        <a href="arearestrita.php">Área restrita</a>
        <a href="cadastro.php">Cadastre-se</a>
        <img src="./assets/img/Akademia (1) 1.png" alt="">
    </header>

    <h2>Nossas modalidades</h2>

    <?php

    include_once("class/item.php");
    $item = new Modalidade();

        $lista = $item->listarModalidade();

        if ($lista != 0)
        {
          
            foreach($lista as $i)
            {

                $imagem = $i["imagem"];
                $nome = $i["nome"];
                $descricao = $i["descricao"];

                echo  "
                    <div class='card'>
                        <img class='thumb' src='$imagem' alt='$nome'>
                        <p class='titulo-produto'>$nome</p> 
                        <p>$descricao</p>
                    </div>
                ";
            }
        }
    ?>


    <footer>
        <strong>Desenvolvido por Gabriel, 2023<br>Técnico em informática - Senac Santos</strong>
    </footer>

</body>
</html>