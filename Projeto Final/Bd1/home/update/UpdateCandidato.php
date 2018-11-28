<?php
      include '..\conexao.php';

        $idCandidato = $_POST['idCandidato'];
        $idEndereco = $_POST['idEndereco'];

        $idCurso = $_POST['idCurso'];
        $idUniversidade = $_POST['idUniversidade'];
        $idVaga = $_POST['idVaga'];

        $nome = $_POST['Nome'];
        $cpf = $_POST['cpf'];
        $email = $_POST['email'];

        $cep = $_POST['cep'];
        $rua = $_POST['Rua'];
        $cidade = $_POST['Cidade'];
        $estado = $_POST['Estado'];
        $pais = $_POST['Pais'];
        $numero = $_POST['Numero'];

        $sql = "UPDATE endereco SET CEP = '$cep', Rua = '$rua', Cidade = '$cidade', Estado = '$estado', Pais = '$pais', Numero = '$numero' WHERE idEndereco = '$idEndereco'";
        $result = $db->query($sql);
        $sql = "UPDATE candidato SET Nome = '$nome', CPF = '$cpf', Email = '$email', Curso_idCurso = '$idCurso', Universidade_idUniversidade = '$idUniversidade', Vaga_idVaga = '$idVaga' WHERE idCandidato = '$idCandidato'";
        $result = $db->query($sql);

if(!$result){
            var_dump($idCandidato);
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
