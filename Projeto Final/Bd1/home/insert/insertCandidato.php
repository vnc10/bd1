<?php

        include '..\conexao.php';

    $algo = $_POST['Curso'];
    $sql = "SELECT * FROM curso WHERE idCurso = '$algo'";
    $result = $db->query($sql);
    $dadosCurso = $result->fetch_row();

    $algo = $_POST['Universidade'];
    $sql = "SELECT * FROM universidade WHERE idUniversidade = '$algo'";
    $result = $db->query($sql);
    $dadosUniversidade = $result->fetch_row();

    $algo = $_POST['Vaga'];
    $sql = "SELECT * FROM vaga WHERE idVaga = '$algo'";
    $result = $db->query($sql);
    $dadosVaga = $result->fetch_row();

    $nome = $_REQUEST['Nome'];
    $cpf = $_REQUEST['cpf'];
    $email = $_REQUEST['email'];
    $cep = $_REQUEST['cep'];
    $rua = $_REQUEST['Rua'];
    $cidade = $_REQUEST['Cidade'];
    $estado = $_REQUEST['Estado'];
    $pais = $_REQUEST['Pais'];
    $numero = $_REQUEST['Numero'];

    $sql = "SELECT max(idCandidato) FROM candidato";
    $result = $db->query($sql);
    $idCandidato = $result->fetch_row();
    $idCandidato[0] = $idCandidato[0] + 1;

    $sql = "SELECT max(idEndereco) FROM endereco";
    $result = $db->query($sql);
    $idEndereco = $result->fetch_row();
    $idEndereco[0] = $idEndereco[0] + 1;

    $result = $db->query("INSERT INTO endereco(idEndereco, CEP, Rua, Cidade, Estado, Pais, Numero) VALUES('$idEndereco[0]','$cep','$rua', '$cidade', '$estado', '$pais', '$numero')");
    $result = $db->query("INSERT INTO `candidato`(`idCandidato`, `Nome`, `CPF`, `Email`, `Curso_idCurso`, `Universidade_idUniversidade`, `vaga_idVaga`, `Endereco_idEndereco`) VALUES ('$idCandidato[0]', '$nome', '$cpf', '$email', '$dadosCurso[0]', '$dadosUniversidade[0]', '$dadosVaga[0]', '$idEndereco[0]')");

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
