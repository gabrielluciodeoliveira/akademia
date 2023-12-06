<?php
                include_once("./class/Usuario.php");
 
                $u = new Usuario(); //criar objeto da classe Usuario
                $listaDeUsuario = $u->listarUsuario();
 
                echo "<table>
                    <tr>
                        <th>Nome</th>
                        <th>E-mail</th>
                        <th>Data de Nascimento</th>
                        <th>Cidade</th>
                    </tr>";
 
                foreach ($listaDeUsuario as $usuario) {
                   echo
                        "<tr>
                            <td>" . $usuario["nome"] . "</td>
                            <td>" . $usuario["email"] . "</td>
                            <td>" . $usuario["dtNascimento"] . "</td>
                            <td>" . $usuario["cidade"] . "</td>
                            <td> <a href='editarUsuario.php?id=" . $usuario["idUsuario"] . "'>Editar</a></td>
                            <td> <a href='excluirUsuario.php?id=" . $usuario["idUsuario"] . "'>Deletar</a></td>
                        </tr>";
                    }
 
                echo "</table>"
            ?>