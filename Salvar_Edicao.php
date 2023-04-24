<?php

session_start();
include_once('../conn/connection.php');

if(isset($_POST['update']))
{
 

            $numero=$_POST['numero'];

            $titulo=$_POST['titulo'];
            $descricao=$_POST['descricao'];
            $dt_aberto=$_POST['dt_aberto'];
            $dt_fechamento=$_POST['dt_fechamento'];
            $usuario_abertura=$_POST['usuario_abertura'];
            $usuario_atendimento=$_POST['usuario_atendimento'];
            $status=$_POST['status'];
           

            $sqlUpdate="update DEMANDAS set titulo='$titulo', descricao='$descricao',dt_aberto='$dt_aberto',dt_fechamento='$dt_fechamento',usuario_abertura='$usuario_abertura',usuario_atendimento='$usuario_atendimento',status='$status' where numero='$numero'";
            $result=$conexao->query($sqlUpdate);

          
        }
        
        header("Location:../Sistema_Chamado.php");
        
       
       
       
        
        ?>
