<?php

        include '..\conexao.php';
    $Nome = $_REQUEST['Nome'];

    $algo = $_POST['Curso'];
    $sql = "SELECT * FROM curso WHERE idCurso = '$algo'";
    $result = $db->query($sql);
    $dadosCurso = $result->fetch_row();


    $sql = "SELECT max(idArea) FROM area";
    $result = $db->query($sql);
    $idArea = $result->fetch_row();
    $idArea[0] = $idArea[0] + 1;

$result = $db->query("INSERT INTO area(idArea, Nome, Curso_idCurso) VALUES('$idArea[0]','$Nome', '$dadosCurso[0]')");

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
