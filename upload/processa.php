<?php

session_start();

//Conexão com o BD

include_once('conexao.php');


// Receber os dados do upload
// $arquivo = $_FILES['arquivo'];
// var_dump($arquivo);

$arquivo_tmp = $_FILES['arquivo']['tmp_name'];

// leitura do arquivo para um array

$dados = file($arquivo_tmp);
//var_dump($dados);

// $int = 1111 / 100.00;

// var_dump($int);
// echo $int;
// print_r($int);

foreach($dados as $linha){
    $linha = trim($linha);

   
     $tipo = substr($linha, 0, 1); //2, 3, 9
     $data = substr($linha, 1, 8);
     $valor = substr($linha, 9, 10) / 100;
     $cpf = substr($linha, 19, 11);
     $cartao = substr($linha, 30, 12);
     $hora = substr($linha, 42, 6);
     $dono_loja = substr($linha, 48, 14);
     $nome_loja = substr($linha, 62, 19);

     if(($tipo == 2) || ($tipo == 3) || ($tipo == 9)){
        $novo_valor = $valor * (-1);
     }else{
        $novo_valor = $valor;
     }

     switch ($tipo) {
        case 1:
            $transacao = 'DÉBITO';
            break;
        case 2:
            $transacao = 'BOLETO';
            break;
        case 3:
            $transacao = 'FINANCIAMENTO';
            break;
        case 4:
            $transacao = 'CRÉDITO';
            break;
        case 5:
            $transacao = 'RECEB. EMPRÉSTIMO';
            break;
        case 6:
            $transacao = 'VENDAS';
            break;
        case 7:
            $transacao = 'RECEB. TED';
            break;
        case 8:
            $transacao = 'RECEB. DOC';
            break;
        case 9:
            $transacao = 'ALUGUEL';
            break;
    }

   
    $result_import = "INSERT INTO dados (tipo, data, valor, cpf, cartao, hora, dono_loja, nome_loja)
                      VALUES ('$transacao', '$data', '$novo_valor', '$cpf', '$cartao', '$hora', '$dono_loja', '$nome_loja')";

    $resultado = mysqli_query($conn, $result_import);

     
    // if($resultado -> connect_errno){
    //     echo "Falha na conexão";
    // }
    // else{
    //     echo "Conexão realizada com sucesso";
    // }

    //var_dump($tipo, $data, $valor, $cpf, $cartao, $hora, $dono_loja, $nome_loja);

}
$_SESSION['msg'] = "<p style='color: white;'>Dados inseridos com sucesso</p>";
header("Location: upload.php")


?>