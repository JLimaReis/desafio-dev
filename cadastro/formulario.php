<?php

    if(isset($_POST['submit']))
    {
        // print_r($_POST['nome']);
        // print_r($_POST['email']);
        // print_r($_POST['telefone']);
        // print_r($_POST['password']);

        include_once('config.php');

        $nome = $_POST['nome'];
        $email = $_POST['email'];
        $telefone = $_POST['telefone'];
        $senha = $_POST['password'];

        $result = mysqli_query($conexao, "INSERT INTO usuario(nome, email, telefone, senha) 
        VALUES ('$nome', '$email', '$telefone', '$senha')");
    }

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulário de Cadastro</title>
    <link rel="stylesheet" type="text/css" href="style.css">
</head> 
<body>
    <div class="box">
        <form action="formulario.php" method="POST">
            <fieldset>
                <legend><b>Cadastro de Usuário</b></legend>
                <br>
                <div class="inputbox">
                    <input type="text" name="nome" id="nome" class="inputUser" required>
                    <label for="nome" class="labelInput">Nome Completo</label>
                </div>
                <br><br>

                <div class="inputbox">
                    <input type="text" name="email" id="email" class="inputUser" required>
                    <label for="email" class="labelInput">E-mail</label>
                </div>
                <br><br>

                <div class="inputbox">
                    <input type="tel" name="telefone" id="telefone" class="inputUser" required>
                    <label for="telefone" class="labelInput">Telefone</label>
                </div>
                <br><br>

                <div class="inputbox">
                    <input type="password" name="password" id="password" class="inputUser" required>
                    <label for="password" class="labelInput">Senha</label>
                </div>
                <br><br>

                <!-- <div class="inputbox">
                    <input type="password" name="passconfirmation" id="passconfirmation" class="inputUser" required data-equal="password">
                    <label for="passconfirmation" class="labelInput">Digite novamente sua Senha</label>
                </div>
                <br><br> -->

                <input type="submit" name="submit" id="submit">

                
            </fieldset>
        </form>
    </div>
    <!-- <p class="error-validation template"></p>
    <script src="scripts.js"></script> -->
</body>
</html>