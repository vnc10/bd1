<?php

    include '..\conexao.php';
            $algo = $_REQUEST['empresa'];
            $sql = "SELECT * FROM empresa WHERE idEmpresa = '$algo'";
            $result = $db->query($sql);
            $dadosEmpresa = $result->fetch_row();

            $sql = "SELECT * FROM endereco WHERE idEndereco = '$dadosEmpresa[4]'";
            $result = $db->query($sql);
            $dadosEndereco = $result->fetch_row();

            $sql = "DELETE FROM empresa WHERE idEmpresa = '$dadosEmpresa[0]'";
            $result = $db->query($sql);

            $sql = "DELETE FROM endereco WHERE idEndereco = '$dadosEndereco[0]'";
            $result = $db->query($sql);

            if(!$result){
            echo 'Desculpe, Ocorreu um erro em nossos servidores, tente novamente mais tarde!';
            ?>
            <a href="../index.html"> <input type="submit" value="Voltar a pagina inicial" /> </a>
            <?php
        }
        else{
            echo 'Exclusão realizada com sucesso!!';
            ?>
            <a href="../index.html"> <input type="submit" value="Voltar a pagina inicial" /> </a>
        <?php
            }

        ?>
