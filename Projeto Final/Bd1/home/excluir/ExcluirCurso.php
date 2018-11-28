<?php

    include '..\conexao.php';
    $algo = $_REQUEST['curso'];
    $sql = "SELECT * FROM curso WHERE idCurso = '$algo'";
    $result = $db->query($sql);
    $dadosCurso = $result->fetch_row();


    $sql = "DELETE FROM curso WHERE idCurso = '$dadosCurso[0]'";
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
