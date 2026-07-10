<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=h, initial-scale=1.0">
    <title>Resultado</title>
   
</head>
</head>

<body>
   
    <h1>Resultado da Multiplicação</h1><br>
    <?php

 include 'conexao.php';
   
    $numero1 = $_POST['numero1'];
    $numero2 = $_POST['numero2'];
    $numero3 = $_POST['numero3'];
    $multiplicacao = $numero1 * $numero2 * $numero3;

    //sql 
    $sql = "INSERT INTO mult (num1, num2, num3, resultado) VALUES ($numero1, $numero2, $numero3,  $multiplicacao)";

    $conexao->query($sql);

    echo "A multiplicação de $numero1 * $numero2 * $numero3= $multiplicacao";

    ?>