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

 include 'conexaomult.php';
   
    $numero1 = $_POST['num1'];
    $numero2 = $_POST['num2'];
    $numero3 = $_POST['num3'];
    $multiplicacao = $numero1 * $numero2 * $numero3;

    //sql 
    $sql = "INSERT INTO multiplicacao (numero1, numero2, numero3, resultado) VALUES ($numero1, $numero2, $numero3, $multiplicacao)";

    $conexao->query($sql);

    echo "A multiplicação de $numero1 * $numero2 * $numero3 = $multiplicacao";

    ?>