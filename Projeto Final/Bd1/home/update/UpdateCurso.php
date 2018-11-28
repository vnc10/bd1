<?php

    include '..\conexao.php';
        $idCurso = $_POST['idCurso'];
        $nome = $_POST['Nome'];
        $periodo = $_POST['Periodo'];

        $sql = "UPDATE curso SET Nome = '$nome', Periodo = '$periodo' WHERE idCurso = '$idCurso'";
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
