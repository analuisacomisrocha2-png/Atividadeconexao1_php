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

echo "O resultado do numerto1 é $num1, numero2 é $num2, eo resultado é $resultado"


?>