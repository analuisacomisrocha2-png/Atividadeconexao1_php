<<<<<<< HEAD:getpost/banco.php
<?php 

$host = "localhost";
$usuario = "root";
$senha = "senac";
$banco = "formulario";
$porta = "3307";


$conexao = new mysqli(

$host,
$usuario,
$senha,
$banco,
$porta

);
 
$conexao->connect_error
=======
<?php 

$host = "localhost";
$usuario = "root";
$senha = "senac";
$banco = "produto";
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
>>>>>>> 0d327bdaa3be05ea38204d0a23b4cd89fafab66a:banco.php
?>