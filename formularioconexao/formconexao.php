<?php 

$host = "localhost";
$usuario = "root";
$senha = "senac";
$banco = "conexao3php";
$porta = "3307";


$conexao = new mysqli(

$host,
$usuario,
$senha,
$banco,
$porta

);

echo "O resultado do numerto1: $num1, numero2: $num2, eo resultado: $resultado"


?>