<?php

    include '..\conexao.php';

    $idEmpresa = $_POST['idEmpresa'];
    $idEndereco = $_POST['idEndereco'];


    $nome = $_POST['Nome'];
    $cnpj = $_POST['cnpj'];
    $descricao = $_POST['Descricao'];

    $cep = $_POST['cep'];
    $rua = $_POST['Rua'];
    $cidade = $_POST['Cidade'];
    $estado = $_POST['Estado'];
    $pais = $_POST['Pais'];
    $numero = $_POST['Numero'];

    $sql = "UPDATE endereco SET CEP = '$cep', Rua = '$rua', Cidade = '$cidade', Estado = '$estado', Pais = '$pais', Numero = '$numero' WHERE idEndereco = '$idEndereco'";
    $result = $db->query($sql);
    $sql = "UPDATE empresa SET Nome = '$nome', CNPJ = '$cnpj', Descricao = '$descricao' WHERE idEmpresa = '$idEmpresa'";
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
