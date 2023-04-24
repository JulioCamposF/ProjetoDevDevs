<?php

session_start();
//para testar os dados que estão vindo do login
print_r($_REQUEST);


//validações
//SE EXISTIR VINDO DO SUBMIT FAÇA
if(isset($_POST['submit'])&& !empty($_POST['login'])&& !empty($_POST['senha'])){

    //dado certo vamos incluir nossa conexão ao banco de dados
    include_once("conn/connection.php");

    $login=$_POST['login'];
    $senha=$_POST['senha'];

    /*para verificarmos se está chegando o conteudo da label*/
    print_r('Email: '.$login);
    print_r('Senha: '.$senha);
    

    $sql="SELECT * FROM USUARIO WHERE email='$login' and senha='$senha'";

    $resultado=$conexao->query($sql);

    //para ver o retorno de numero de linhas
    //print_r($sql);
    //print_r($resultado);
    //teste de validação
    if(mysqli_num_rows($resultado)<1){
       //' nao existe esta senha/login'

       //caso não exista destruir a sessão
       unset($_SESSION['login']);
       unset($_SESSION['senha']);
       header('Location: index.php');
    }else{
        //' Existe'
        //para podermos controlar as valiadações da tela , se não existir ele não deixa entrar diretamente no link
        //para segurança
        //sessao é uma forma de capturar individualmente os dados de acesso
        $_SESSION['login']=$login;
        $_SESSION['senha']=$senha;
        header('Location: Sistema_Chamado.php');
    }




    //acessa o sistema
}else{
    header('Location:index.php');
}


?>