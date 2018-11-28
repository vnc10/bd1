<?php

    include '..\conexao.php';

    $idVaga = $_POST['idVaga'];
    $idArea = $_POST['idArea'];
    $idEmpresa = $_POST['idEmpresa'];

    $quantidade = $_POST['Quantidade'];
    $nome = $_POST['Nome'];
    $tipo = $_POST['Tipo'];
    $habilidades = $_POST['Habilidades'];


    $sql = "UPDATE vaga SET Quantidade = '$quantidade', Nome = '$nome', Tipo = '$tipo', Habilidades = '$habilidades', Area_idArea = '$idArea', Empresa_idEmpresa = '$idEmpresa' WHERE idVaga = '$idVaga'";
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
