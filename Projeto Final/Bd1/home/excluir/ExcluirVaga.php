<?php

    include '..\conexao.php';
            $algo = $_REQUEST['vaga'];
            $sql = "SELECT * FROM vaga WHERE idVaga = '$algo'";
            $result = $db->query($sql);
            $dadosVaga = $result->fetch_row();

            $sql = "DELETE FROM vaga WHERE idVaga = '$dadosVaga[0]'";
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
