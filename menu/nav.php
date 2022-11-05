<?php
    session_start();
    include_once('../config.php');
  
    if((!isset($_SESSION['email']) == true) and (!isset($_SESSION['senha']) == true))
    {
        unset($_SESSION['email']);
        unset($_SESSION['senha']);
        header('Location: nav.php');
    }
    $logado = $_SESSION['email'];
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <title>Menu Principal</title>
    <style>
        body{
            background-image: linear-gradient(to right, rgb(20, 147, 220), rgb(172, 82, 195));
            color: white;
            text-align: center;
        }
        .table-bg{
            background: rgba(0, 0, 0, 0.3);
            border-radius: 15px 15px 0 0;
        }

        .table-bg1{
            background: rgba(0, 0, 0, 0.3);
            border-radius: 15px 15px 0 0;
        }

       
    </style>
</head>
<body>
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
        <div class="container-fluid">
            <a class="navbar-brand"></a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="textoNavbar">
                <ul class="navbar-nav mr-auto">
                <li class="nav-item active">
                    <a class="nav-link" href="#">Home</span></a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="../upload/upload.php">Importar Arquivo CNAB</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="../relatorio/relatorio.php">Relatório Financeiro</a>
                </li>
                </ul>

        </div>
        <div class="d-flex">
            <a href="../index.php" class="btn btn-danger me-5">Sair</a>
        </div>
    </nav>
    <br>
    <?php
        echo "<h1>Bem vindo <u>$logado</u></h1>";
    ?>
    <br><br>

    <h1>Desafio Dev #ByCoders</h1>
    <br><br>
    <legend><p>Este desafio consiste em realizar o input de um arquivo .txt que contempla informações oriundas da integração CNAB.</p>
        <p>Aqui você encontrará a opção de importar um arquivo e visualizar o relatório do arquivo importado</p>
        <p>O relatório contempla a movimentação financeira das empresas, bem como dados sintéticos do saldo em conta das empresas.</p></legend>
            </tbody>
        </table>
    </div>
</body>
</html>