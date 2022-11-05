<?php
    session_start();
    if(isset($_SESSION['email']) == true && (!isset($_SESSION['senha']) == true)){
        unset($_SESSION['email']);
        unset($_SESSION['senha']);
        header('Location: index.php');
    }
    $logado = $_SESSION['email'];

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Upload de Arquivos</title>
    <link rel="stylesheet" type="text/css" href="style.css">

</head> 
<body>

    <?php
    if(isset($_SESSION['msg'])){
        echo $_SESSION['msg'];
        unset($_SESSION['msg']);
    }
    ?>

<a href="../menu/nav.php" class="btn btn-secondary btn-lg active" role="button" aria-pressed="true">Voltar ao Menu</a>
    <div class="box">
        <form method="POST" action="processa.php" enctype="multipart/form-data">
            <fieldset>
                <legend><b>Importar Arquivos</b></legend>
                <br>
                <div class="inputbox">
                    <input type="file" name="arquivo" id="arquivo" class="inputUser" required><br><br>
                </div>

                <input type="submit" value="Importar" name="submit" id="submit">
            </fieldset>
        </form> 
    </div>   
</body>
</html>