<?php 
include "banco.php";

$nome=$_POST['nome'];
$idade=$_POST['idade'];
$email=$_POST['email'];
$telefone=$_POST['telefone'];
$cidade=$_POST['cidade'];


$sql= "UPDATE sistema
SET 
nome:'$nome';
idade:'$idade';
email:'$email';
telefone:'$telefone';
cidade:'$cidade';
WHERE id = $id";

if ($conexao-> real_query($sql)) {
    header("location : listar_cliente.php");

      exit();

}else {
    echo "Erro ao atualizar o cliente..." . $conexao->error;
}




?>