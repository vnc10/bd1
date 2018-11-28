<?php

    include '..\conexao.php';
            $algo = $_REQUEST['universidade'];
            $sql = "SELECT * FROM universidade WHERE idUniversidade = '$algo'";
            $result = $db->query($sql);
            $dadosUniversidade = $result->fetch_row();

            $sql = "SELECT * FROM endereco WHERE idEndereco = '$dadosUniversidade[3]'";
            $result = $db->query($sql);
            $dadosEndereco = $result->fetch_row();

            $sql = "DELETE FROM universidade WHERE idUniversidade = '$dadosUniversidade[0]'";
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
