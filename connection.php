<?php
$dbHost='localhost';
$dbUsername='root';
$dbPassword='';
$dbNome='chamados';




$conexao= new mysqli($dbHost,$dbUsername,$dbPassword,$dbNome);


if($conexao->connect_errno){
    echo " aconeceu um erro na conexão";
}else{
    echo " ";
}

?>