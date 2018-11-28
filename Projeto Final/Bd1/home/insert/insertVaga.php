<?php

        include '..\conexao.php';

    $quantidade = $_REQUEST['Quantidade'];
    $nome = $_REQUEST['Nome'];
    $tipo = $_REQUEST['Tipo'];
    $habilidades = $_REQUEST['Habilidades'];

    $algo = $_POST['Area'];
    $sql = "SELECT * FROM area WHERE idArea = '$algo'";
    $result = $db->query($sql);
    $dadosArea = $result->fetch_row();

    $algo = $_POST['Empresa'];
    $sql = "SELECT * FROM empresa WHERE idEmpresa = '$algo'";
    $result = $db->query($sql);
    $dadosEmpresa = $result->fetch_row();

    $sql = "SELECT max(idVaga) FROM vaga";
    $result = $db->query($sql);
    $idVaga = $result->fetch_row();
    $idVaga[0] = $idVaga[0] + 1;

    $result = $db->query("INSERT INTO vaga(idVaga, Quantidade, Nome, Tipo, Habilidades, Area_idArea, Empresa_idEmpresa) VALUES ('$idVaga[0]', '$quantidade', '$nome', '$tipo', '$habilidades', '$dadosArea[0]', '$dadosEmpresa[0]')");

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
