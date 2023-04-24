<?php
//continuação da verificação de seguraça da sessão
    //iniciamos a seção para captura dos dados do login
    session_start();
    include_once("conn/connection.php");
    //para ver se a sessão retornou ou não 
    //print_r($_SESSION);

    //aqui vamos validar novamente se tem a sessão ativa ou não 
    //no caso se está carregado nosso login e senha
    if((!isset($_SESSION['login'])==true)and(!isset($_SESSION['senha'])==true)){
        unset($_SESSION['login']);
        unset($_SESSION['senha']);

        header('Location: index.php');

    }

    $logado=$_SESSION['login'];
    
?>

<!DOCTYPE html>
<html lang="Pt">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sistema de controle Zucchetti </title>
    <link rel="stylesheet" href="css/style_Sobre1.css">
    
</head>

<body>
    <header class="box-sistema">
    
    <nav class="form-content">
          <a class="Acesso">
          <img src="imagens/icons.png" class="imgRedonda"> 
        
            <?php
              print_r('  Bem vindo Colaborador '.$logado);
            ?>
          </a>
         
          <ul class="menu">
            <li><a href="Sistema_chamado.php">Chamados</a><li>
            <li>|</li> 
            <li><a href="Relatorio_Chamado.php">Relatorios</a><li>
            <li>|</li> 
            <li><a href="Colaboradores.php">Colaboradores</a><li>
            <li>|</li> 
            <li><a href="Sobre_Chamado.php">Sobre</a><li>
          </ul>
       
        </nav> 
    

    </header>
  
    <p class="sub-titulo">Sobre o Projeto!</p>
   
    <br>
    <p>
      Colaboradores
    </p>
        <footer>
            
        <h6>Projeto Feito por Julio Cesar de CamposF</h6>
    
    
        </footer>

</body>
