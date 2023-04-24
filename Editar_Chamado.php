<?php

if(!empty($_GET['numero']))
{
    
    include_once('conn/connection.php');
   
    $numero=$_GET['numero'];

   

    $sqlSelect="SELECT * FROM DEMANDAS WHERE numero=$numero";

    $resultSql=$conexao->query($sqlSelect);

    if($resultSql->num_rows>0){
        while($user_data=mysqli_fetch_assoc($resultSql)){

            $titulo=$user_data['titulo'];
            $descricao=$user_data['descricao'];
            $dt_aberto=$user_data['dt_aberto'];
            $dt_fechamento=$user_data['dt_fechamento'];
            $usuario_abertura=$user_data['usuario_abertura'];
            $usuario_atendimento=$user_data['usuario_atendimento'];
            $status=$user_data['status'];
           

        }
      
        

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
        <form action="conn/Salvar_Edicao.php" method="POST">
            <fieldset>
                <legend><b>Alterar Chamado</b></legend>

                <div class="cabecario">
                <br>
                <div class="inputBox">
                    <input type="text" name="titulo" id="titulo" class="inputUser" value="<?php echo $titulo ?>" required>
                    <label for="titulo" class="labelInput">Titulo da Tarefa</label>
                </div>
                <br>
                <div class="inputBox">
                    <input type="text" name="descricao" id="descricao" class="inputUser" value="<?php echo $descricao ?>" required>
                    <label for="descricao"class="labelInput">Descrição</label>
                </div>
                <br>
                <div class="inputBox">
                    <input type="date" name="dt_aberto" id="dt_aberto" class="inputUser" value="<?php echo $dt_aberto ?>" required>
                    <br> <label for="dt_aberto"class="labelInput">Data Abertura</label>
                </div>
                </div>

<br>

                <div class="statusC">
                <b>Status de Abertura</b>
                <br>
                <br>
                <div id="fechado">
                <input type="radio" name="status" id="fechado" value="fechado" <?php echo($status=='FECHADO')? 'checked' : '' ?> required>
                 <label for="fechado" >FECHADO</label>
                </div>
                <br>
                <br>
                <div id="aguardando">
                <input type="radio" name="status" id="aguardando" value="aguardando" <?php echo($status=='AGUARDANDO')? 'checked' : '' ?> required>
                <label for="aguardando">EM PROCESSO</label>
                </div>
                <br>
                <br>
                <div id="aberto">
                <input type="radio" name="status" id="aberto" class="aberto" value="aberto" <?php echo($status=='ABERTO')? 'checked' : '' ?> required>
                <label for="aberto">ABERTO</label>
                </div>
               
                <br>
                
                </div>

                <br>
                <div class="fechamentoC">
                <br>
                <div class="inputBox">
             
                <input type="date" name="dt_fechamento" id="dt_fechamento" class="inputUser" class="inputUser"  value="<?php echo $dt_fechamento ?>" > 
                <label for="dt_fechamento" class="labelInput">Data Fechamento</label>
                </div>
                </div>


               <br>

                <div class="usuarios">
               <br>
                <div class="inputBox">
                    <input type="text" name="usuario_abertura" id="usuario_abertura" class="inputUser" value="<?php echo $usuario_abertura ?>" required>
                    <label for="usuario_abertura"class="labelInput">Aberto por:</label>
                </div>
                <br>
                <div class="inputBox">
                    <input type="text" name="usuario_atendimento" id="usuario_atendimento" class="inputUser" value="<?php echo $usuario_atendimento ?>" >
                    <label for="usuario_atendimento"class="labelInput">Atendido por:</label>
                </div>
                </div>
                <br>
                <footer>

                <div class="input-group">
                <span class="input-group-addon"><img src="imagens/icons8-salvar16.png" class="imgSalvar"></span>
                <input type="hidden" name="numero" class="b1" value="<?php echo $numero ?>">
                <input type="submit" name="update" class="b1" id="update">
                <a>Alteração</a>
                </div>
                 
                
               
              
              
                


                </footer>


               

            

                

            </fieldset>




        </form>
    </div>
    
</body>

</html>