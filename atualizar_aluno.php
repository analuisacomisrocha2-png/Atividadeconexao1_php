<?php 
include "banco.php";

$id = $_POST['id'];
//receber os dados digitados pelo usuario

$nome=$_POST['nome'];
$idade=$_POST['idade'];
$curso=$_POST['curso'];
$cidade=$_POST['cidade'];
$entrega=$_POST['entrega'];

$sql= "UPDATE form SET 
nome ='$nome',
idade ='$idade',
curso ='$curso',
cidade ='$cidade',
entrega ='$entrega', WHERE id = '$id'";

if ($conexao->query($sql)) {
    header("location : listar_cliente.php");

      exit();

}else {
    echo "Erro ao atualizar o cliente...";
}




?>