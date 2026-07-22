<?php 

$host = "localhost";
$usuario = "root";
$senha = "senac";
$banco = "aluno";
$porta = "3307";


$conexao = new mysqli(

$host,
$usuario,
$senha,
$banco,
$porta

);
 
if ($conexao->connect_error) {
    die("Falha na conexão: " . $conexao->connect_error);
}
?>