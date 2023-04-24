<?php

if(!empty($_GET['numero']))
{
    include_once('conn/connection.php');
   
    $numero=$_GET['numero'];

    $sqlSelect="SELECT * FROM DEMANDAS WHERE NUMERO=$numero";

    $resultDel=$conexao->query($sqlSelect);

    if($resultDel->num_rows>0){
       
    $sqlDelete="DELETE FROM DEMANDAS WHERE NUMERO=$numero";
    $resultdelete=$conexao->query($sqlDelete);

    }

}

header('Location:Sistema_Chamado.php');
?>
