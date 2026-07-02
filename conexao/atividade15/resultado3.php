<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=h, initial-scale=1.0">
    <title>Resultado</title>
   
</head>
</head>

<body>
   
    <h1>Resultado da Soma</h1><br>
    <?php

 include 'conexao.php';
   
    $numero1 = $_POST['num1'];
    $numero2 = $_POST['num2'];
    $soma = $numero1 + $numero2;

    //sql 
    $sql = "INSERT INTO calculo (numero1, numero2, resultado) VALUES ($numero1, $numero2, $soma)";

    $conexao->query($sql);

    echo "A soma de $numero1 + $numero2 = $soma";

    ?>