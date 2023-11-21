<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastro</title>
</head>
<body>
    
    <form action="">
        <label for="">Nome:</label>
        <input type="text" name="nome">

        <label for="">E-mail:</label>
        <input type="email" name="email">

        <label for="">Data de Nascimento:</label>
        <input type="text" name="dtNascimento">

        <label for="">Cidade:</label>
        <input type="text" name="cidade">

        <label for="">Senha:</label>
        <input type="text" name="senha">

        <label for="">Confirme sua senha:</label>
        <input type="text" name="senhaConfirma">

        <?php
            if (isset($_REQUEST["cadastrar"]))
            {
                $u = New Usuario();
                $u->create($_REQUEST["nome"], $_REQUEST["email"], $_REQUEST["dtNascimento"], $_REQUEST["cidade"], $_REQUEST["senha"]);
                echo $u->inserirUsuario() == true
                            ? "<p>Usuário cadastrado. </p>"
                            : "<p>Ocorreu um erro. </p>"
            }
        ?>
    </form>

    
</body>
</html>