<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=h, initial-scale=1.0">
    <title>Resultado</title>
   
</head>
</head>

<body>
   
    <h1>Resultado da Subtracao</h1><br>
    <?php

 include 'subtracao.php';
   
    $numero1 = $_POST['numero1'];
    $numero2 = $_POST['numero2'];
    $subtracao = $numero1 - $numero2 ;

    //sql 
    $sql = "INSERT INTO subtracao (num1, num2, resultado) VALUES ($numero1, $numero2,  $subtracao)";

    $conexao->query($sql);

    echo "A subtracao de $numero1 - $numero2 = $subtracao";

    ?>