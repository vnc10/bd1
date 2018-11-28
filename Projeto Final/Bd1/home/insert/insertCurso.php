<?php

        include '..\conexao.php';
    $Nome = $_REQUEST['Nome'];
    $Periodo = $_REQUEST['Periodo'];

    $sql = "SELECT max(idCurso) FROM curso";
    $result = $db->query($sql);
    $idCurso = $result->fetch_row();
    $idCurso[0] = $idCurso[0] + 1;
    $result = $db->query("INSERT INTO curso (idCurso, Nome, Periodo) VALUES ('$idCurso[0]', '$Nome', '$Periodo')");
    if(!$result){
            echo 'Desculpe, Ocorreu um erro em nossos servidores, tente novamente mais tarde!';
            ?>
<a href="../index.html"> <input type="submit" value="Voltar a pagina inicial" /> </a>
            <?php
        }
        else{
            echo 'Cadastro realizado com sucesso!!';
            ?>
            <a href="../index.html"> <input type="submit" value="Voltar a pagina inicial" /> </a>
        <?php
            }
?>
