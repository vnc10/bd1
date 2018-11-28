<?php

        include '..\conexao.php';

    $nome = $_REQUEST['Nome'];
    $cnpj = $_REQUEST['cnpj'];
    $descricao = $_REQUEST['Descricao'];
    $cep = $_REQUEST['cep'];
    $rua = $_REQUEST['Rua'];
    $cidade = $_REQUEST['Cidade'];
    $estado = $_REQUEST['Estado'];
    $pais = $_REQUEST['Pais'];
    $numero = $_REQUEST['Numero'];

    $sql = "SELECT max(idEmpresa) FROM empresa";
    $result = $db->query($sql);
    $idEmpresa = $result->fetch_row();
    $idEmpresa[0] = $idEmpresa[0] + 1;

    $sql = "SELECT max(idEndereco) FROM endereco";
    $result = $db->query($sql);
    $idEndereco = $result->fetch_row();
    $idEndereco[0] = $idEndereco[0] + 1;

    $result = $db->query("INSERT INTO endereco(idEndereco, CEP, Rua, Cidade, Estado, Pais, Numero) VALUES('$idEndereco[0]','$cep','$rua', '$cidade', '$estado', '$pais', '$numero')");
    $result = $db->query("INSERT INTO Empresa(idEmpresa, Nome, CNPJ, Descricao, Endereco_idEndereco) VALUES ('$idEmpresa[0]', '$nome', '$cnpj', '$descricao', '$idEndereco[0]')");

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
