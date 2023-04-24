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

    if(isset($_POST["submit"])){
        
    }
      
        $sql="SELECT * FROM DEMANDAS ORDER BY NUMERO DESC";

        $resultado=$conexao->query($sql);
    
?>

<!DOCTYPE html>
<html lang="Pt">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sistema de controle Zucchetti </title>
    <link rel="stylesheet" href="css/style_sistema_.css">
    
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
  
    <p class="sub-titulo">Listagem de Chamados/Atendimento</p>

    

    <div class='form-pesquisa'>
                   
                    <form method="post">
                    <input type="text" placeholder="Pesquisar" class ='pesquisar'id="pesquisar" name="search">
                    <a>
                    <button class="pesquisa" name="submit">
                    <img src="imagens/icons8-lupa2.png" class="imgBusca"> 
                     Buscar    
                    </button>
                    </a>
                    </form>
                  
        </div>
     <br>
     <a href='Adicionar_Chamado.php?numero=$user_data[numero]'>
    <button class='button3'>
    <img src="imagens/iconsSOMA1.png" class="imgInserir"> 
      Adicionar Chamado
    </button></a>
    <br>
    <p> </p>
    <section>
        <table class='tabela'>
            <thead>
                <tr>
                <th scope="col">#</th>
                <th scope="col">Titulo</th>
                <th scope="col">Descrição</th>
                <th scope="col">Data Abertura</th>
                <th scope="col">Data fechamento</th>
                <th scope="col">Aberto por:</th>
                <th scope="col">Atendido por:</th>
                <th scope="col">Status</th>
                <th scope="col">...</th>
                </tr>

            </thead>

            <tbody>
                <?php
                 
                 if(isset($_POST['submit'])){
                    $search=$_POST['search'];

                    $sql="select * from demandas where titulo like'%$search%' or numero like'%$search%'";

                    $resultado=$conexao->query($sql);
                 }

                // <input type='submit' class='enviar' id='submit' value='<'>
                // <input type='submit' class='deletar' id='submit2' value='Del'>
                    //PARA PODER PERCORRER TODA A LISTA
                while($user_data=mysqli_fetch_assoc($resultado)){
                  
                    echo"<tr class='tab-cab'>";
                    echo"<td>".$user_data['numero']."</td>";
                    echo"<td>".$user_data['titulo']."</td>";
                    echo"<td>".$user_data['descricao']."</td>";
                    echo"<td>".$user_data['dt_aberto']."</td>";
                    echo"<td>".$user_data['dt_fechamento']."</td>";
                    echo"<td>".$user_data['usuario_abertura']."</td>";
                    echo"<td>".$user_data['usuario_atendimento']."</td>";
                    echo"<td>".$user_data['status']."</td>";
                    echo"<td>
                    
                    <a href='Editar_Chamado.php?numero=$user_data[numero]'>
                    <button class='button'>
                    <img src='imagens/icons8-lista-pastel-16.png' class='imgLista'> 
                    Editar</button></a>
                
                    
                    <a href='../AreaChamdos/Deletar_Chamado.php?numero=$user_data[numero]'>
                    <button class='button2'>
                    <img src='imagens/icons8-remover1.png' class='imgexcluir'>
                    Excluir</button></a>
 
                  </td>

                

                  </td>";
             echo"</tr>";

                }
                
                ?>
            </tbody>

        </table>

    </section>
        <footer>
            
        <h6>Projeto Feito por Julio Cesar de CamposF</h6>
    
    
        </footer>

</body>
