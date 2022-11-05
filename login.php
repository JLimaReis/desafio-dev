<?php
session_start();
    
    if(isset($_POST['submit']) && !empty($_POST['email']) && !empty($_POST['pass'])){
        include_once('config.php');

        $email = $_POST['email'];
        $senha = $_POST['pass'];

        // print_r('Email: '. $email);
        // print_r('<br>');
        // print_r('Senha: '. $senha);

        $sql = "SELECT * FROM usuario WHERE email = '$email' AND senha = '$senha'";
        $result = $conexao->query($sql);

        //print_r($result);

        if(mysqli_num_rows($result) < 1){
            unset($_SESSION['email']);
            unset($_SESSION['senha']);
            header('Location: index.php');
        }else{
            $_SESSION['email'] = $email;
            $_SESSION['senha'] = $senha;
            header('Location: menu/nav.php');
        }


    }else{
        header('Location: index.php');
    }
?>