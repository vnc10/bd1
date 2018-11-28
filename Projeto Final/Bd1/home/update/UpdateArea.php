<?php

    include '..\conexao.php';
        $idArea = $_POST['idArea'];
        $idCurso = $_POST['idCurso'];
        $nome = $_POST['Nome'];

        $sql = "UPDATE area SET Nome = '$nome', Curso_idCurso = '$idCurso' WHERE idArea = '$idArea'";
        $result = $db->query($sql);

if(!$result){
            echo 'Desculpe, Ocorreu um erro em nossos servidores, tente novamente mais tarde!';
            ?>
<a href="../index.html"> <input type="submit" value="Voltar a pagina inicial" /> </a>
            <?php
        }
        else{
            echo 'Alteração realizada com sucesso!!';
            ?>
            <a href="../index.html"> <input type="submit" value="Voltar a pagina inicial" /> </a>
        <?php
            }
?>
