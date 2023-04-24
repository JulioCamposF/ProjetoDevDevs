<?php
    
    session_start();
    include_once("conn/connection.php");

    $sql="
    select (100-porc) num from
    (select cast(((((select count(*) Tot from demandas)-(select count(*)nt from demandas where status='ABERTO'))/(select count(*) Tot from demandas))*100) AS DECIMAL(10,0))porc) Porcentagem;
    ";

    $sql2="
    select (100-porc) num2 from
    (select cast(((((select count(*) Tot from demandas)-(select count(*)nt from demandas where status='AGUARDANDO'))/(select count(*) Tot from demandas))*100) AS DECIMAL(10,0))porc) Porcentagem;
    ";

    $sql3="
    select (100-porc) num3 from
    (select cast(((((select count(*) Tot from demandas)-(select count(*)nt from demandas where status='FECHADO'))/(select count(*) Tot from demandas))*100) AS DECIMAL(10,0))porc) Porcentagem;
    ";

    $resultado=$conexao->query($sql);
    $resultado2=$conexao->query($sql2);
    $resultado3=$conexao->query($sql3);

    
   if($user_data=mysqli_fetch_assoc($resultado)){
                  
               
                  $num=$user_data['num'];
                  
              }if
                ($user_data=mysqli_fetch_assoc($resultado2)){
                
                $num2=$user_data['num2'];
              }if
              ($user_data=mysqli_fetch_assoc($resultado3)){
                
                $num3=$user_data['num3'];}
            
        

?>

<!DOCTYPE html>
<html lang="pt">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sistema de controle Zucchetti</title>
    <link rel="stylesheet" href="css/Style_Relatorio_dash.css">
   
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
            <li><a href="Sistema_Chamado.php">Chamados</a><li>
            <li>|</li> 
            <li><a href="Relatorio_Chamado.php">Relatorios</a><li>
            <li>|</li> 
            <li><a href="Colaboradores.php">Colaboradores</a><li>
            <li>|</li> 
            <li><a href="Sobre_Chamado.php">Sobre</a><li>
          </ul>
       
        </nav> 
    


    
    <div class="inputBox">
    <p class="sub-titulo">Relatorio de Status de Chamado Simplificado</p>
                    <input id="numberProgress" type="hidden" value="<?php echo $num ?>">
                    <input id="numberProgress2" type="hidden" value="<?php echo $num2 ?>">
                    <input id="numberProgress3" type="hidden" value="<?php echo $num3 ?>">
                </div>
                <br>
                <br>
                <br>
    <button class='dash' onclick='go()'>
    <img src="imagens/icons8-gráfico-16.png" class="imgBusca"> 
    Rodar DashBoard</button>


    <div class="box">
    <div class="relatorio">

    <div class='R_escrito'>
    <p class='titulo'>EM ABERTO</p>
    <svg>
      
        <circle class='ABERTO' cx="70" cy="70" r="70"></circle>
        <circle id="circleProgress" cx="70" cy="70" r="70"></circle>
        
    </svg>
            </div>
    </div>
    
    <div class='number'>
 
           
    </div>
    </div>
    <br>
    <div class="box2">
    <div class="relatorio">

    <div class='R_escrito'>
    <p class='titulo'>AGUARDANDO</p>
    <svg>
      
        <circle class='AGUARDANDO' cx="70" cy="70" r="70"></circle>
        <circle id="circleProgress2" cx="70" cy="70" r="70"></circle>
        
    </svg>
            </div>
    </div>
    
    <div class='number2'>
 
           
    </div>
    </div>

    <div class="box3">
    <div class="relatorio">

    <div class='R_escrito'>
    <p class='titulo'>FECHADO</p>
    <svg>
      
        <circle class='FECHADO' cx="70" cy="70" r="70"></circle>
        <circle class='circleProgress3' cx="70" cy="70" r="70"></circle>
        
    </svg>
            </div>
    </div>
    
    <div class='number3'>
 
           
    </div>
    </div>
  
</header>   

</body>

<script>
    function go(){
        var circle=document.querySelector('#circleProgress');
        var num=document.querySelector('#numberProgress').value;
        document.querySelector('.number').innerHTML=num +'%'
        circle.style.strokeDashoffset=440-(440*num)/100;

        var circle=document.querySelector('#circleProgress2');
        var num2=document.querySelector('#numberProgress2').value;
        document.querySelector('.number2').innerHTML=num2 +'%'
        circle.style.strokeDashoffset=440-(440*num2)/100;

        var circle=document.querySelector('.circleProgress3');
        var num3=document.querySelector('#numberProgress3').value;
        document.querySelector('.number3').innerHTML=num3 +'%'
        circle.style.strokeDashoffset=440-(440*num3)/100;
    }
</script>





</html>