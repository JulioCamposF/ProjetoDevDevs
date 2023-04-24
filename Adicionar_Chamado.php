<?php


if(isset($_POST['submit'] ))
{
   
include_once('conn/connection.php');

$titulo=$_POST['titulo'];
$descricao=$_POST['descricao'];
$dt_aberto=$_POST['dt_aberto'];
$dt_fechamento=$_POST['dt_fechamento'];
$usuario_abertura=$_POST['usuario_abertura'];
$usuario_atendimento=$_POST['usuario_atendimento'];
$status=$_POST['status'];

if($titulo<>null){
    $result=mysqli_query($conexao,"insert into demandas(titulo,descricao,dt_aberto,dt_fechamento,usuario_abertura,usuario_atendimento,status)values('$titulo','$descricao','$dt_aberto','$dt_fechamento','$usuario_abertura','$usuario_atendimento','$status')");
}else{
    header('Location:Sistema_Chamado.php');
}

}



?>

<!DOCTYPE html>
<html lang="pt">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sistema de controle Zucchetti</title>
    <link rel="stylesheet" href="css/style_inseri.css">
    </script>
</head>
<body>

<header class="box-sistema">
    
    <nav class="form-content">
          <a class="Acesso">
          <img src="imagens/icons.png" class="imgRedonda"> 
        
            <?php
              print_r('  Bem vindo Colaborador ');
            ?>
          </a>
         
          <ul class="menu">
            <li><a href='Sistema_Chamado.php'>Chamados</a><li>
            <li>|</li> 
            <li><a href="/">Relatorios</a><li>
            <li>|</li> 
            <li><a href="/">Colaboradores</a><li>
            <li>|</li> 
            <li><a href="/">Sobre</a><li>
          </ul>
       
        </nav> 
    

    </header>
    <br>
    <div class="box">
        <form action="Adicionar_Chamado.php" method="POST">
            <fieldset>
                <legend><b>Editar Chamado</b></legend>

                <div class="cabecario">
                <br>
                <div class="inputBox">
                    <input type="text" name="titulo" id="titulo" class="inputUser" >
                    <label for="titulo" class="labelInput">Titulo da Tarefa</label>
                </div>
                <br>
                <div class="inputBox">
                    <input type="text" name="descricao" id="descricao" class="inputUser" >
                    <label for="descricao"class="labelInput">Descrição</label>
                </div>
                
                <div class="inputBox">
                   <label for="dt_aberto"class="labelInput">Data Abertura</label>
                   <br>
                    <input type="date" name="dt_aberto" id="dt_aberto" class="inputUser1" >
                    
                </div>
                </div>

<br>

                <div class="statusC">
                <b>Status de Abertura</b>
                <br>
                <br>
                <div id="fechado">
                <input type="radio" name="status" id="fechado" value="fechado" >
                 <label for="fechado" >FECHADO</label>
                </div>
                <br>
                <br>
                <div id="aguardando">
                <input type="radio" name="status" id="aguardando" value="aguardando">
                <label for="aguardando">EM PROCESSO</label>
                </div>
                <br>
                <br>
                <div id="aberto">
                <input type="radio" name="status" id="aberto" class="aberto" value="aberto">
                <label for="aberto">ABERTO</label>
                </div>
               
                <br>
                
                </div>

                <br>
                <div class="fechamentoC">
            
                <div class="inputBox">
                <label for="dt_fechamento" class="labelInput">Data Fechamento</label>
                <br>
                <input type="date" name="dt_fechamento" id="dt_fechamento" class="inputUser1"> 
                
                </div>
                </div>


               <br>

                <div class="usuarios">
               <br>
                <div class="inputBox">
                    <input type="text" name="usuario_abertura" id="usuario_abertura" class="inputUser">
                    <label for="usuario_abertura"class="labelInput">Aberto por:</label>
                </div>
                <br>
                <div class="inputBox">
                    <input type="text" name="usuario_atendimento" id="usuario_atendimento" class="inputUser">
                    <label for="usuario_atendimento"class="labelInput">Atendido por:</label>
                </div>
                </div>
                <br>

                <footer>

                <div class="input-group">
                <span class="input-group-addon"><img src="imagens/icons8-salvar16.png" class="imgSalvar"></span>
                <input type="submit" name="submit" id="submit" class="b1">
                </div>
                 
                
               
              
              
                </footer>

            

                

            </fieldset>




        </form>
    </div>
    
</body>

</html>