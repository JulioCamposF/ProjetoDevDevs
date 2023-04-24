<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css\styleIndex.css">

    <title>Chamados/Zucchetti</title>
</head>
<body>                   
    <header class="box-login">
        <div class="form-content">
            <h3 class="titulo">Boas-Vindas ao Login Chamados</h3>
            <p class="sub-titulo">Controle de Chamados rapido !</p>

            <form action="acesso.php" method="POST">
                <div class="form-input">
                    <label for="text">Digite o Usuario<span> *</span></label>
                    <br>
                    <input type="text" id="login" name="login">
                </div>
                <div class="form-input">
                    <label for="text">Senha<span> *</span></label>
                    <br>
                    <input type="text" id="senha" name="senha">
                </div>

                <div class="link_senha">
                    <a href="Usuarios.php">Cadastre-se clicando aqui?</a>
                    <br>
                    <br>
                </div>
            <a href="Usuarios.php">
                
                <input type="submit" name="submit" id="submit">

            </form>
        </div>


    </header>
    
</body>
<br>
<footer><h6>@Projeto DevDevs ZucchettiBrasil - Feito por JulioCampos</h6></footer>

</html>