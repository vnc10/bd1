<?php

    include '..\conexao.php';
            $algo = $_REQUEST['area'];
            $sql = "SELECT * FROM area WHERE idArea = '$algo'";
            $result = $db->query($sql);
            $dadosArea = $result->fetch_row();

            $sql = "DELETE FROM area WHERE idArea = '$dadosArea[0]'";
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
