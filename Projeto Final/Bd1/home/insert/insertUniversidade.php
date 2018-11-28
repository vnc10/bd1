<?php

        include '..\conexao.php';

    $nome = $_REQUEST['Nome'];
    $telefone = $_REQUEST['Telefone'];
    $cep = $_REQUEST['cep'];
    $rua = $_REQUEST['Rua'];
    $cidade = $_REQUEST['Cidade'];
    $estado = $_REQUEST['Estado'];
    $pais = $_REQUEST['Pais'];
    $numero = $_REQUEST['Numero'];

    $sql = "SELECT max(idUniversidade) FROM universidade";
    $result = $db->query($sql);
    $idUniversidade = $result->fetch_row();
    $idUniversidade[0] = $idUniversidade[0] + 1;

    $sql = "SELECT max(idEndereco) FROM endereco";
    $result = $db->query($sql);
    $idEndereco = $result->fetch_row();
    $idEndereco[0] = $idEndereco[0] + 1;

    $result = $db->query("INSERT INTO endereco(idEndereco, CEP, Rua, Cidade, Estado, Pais, Numero) VALUES('$idEndereco[0]','$cep','$rua', '$cidade', '$estado', '$pais', '$numero')");
    $result = $db->query("INSERT INTO Universidade (idUniversidade, Nome, Telefone, Endereco_idEndereco) VALUES ('$idUniversidade[0]', '$nome', '$telefone', '$idEndereco[0]')");

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
