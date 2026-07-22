<?php 
include "banco.php";

$id = $_GET['id'];

$sql = "DELETE FROM form WHERE id =$id";

if($conexao->query($sql)){
    header("location: listar_aluno.php");

    exit();
}else{
    echo "Erro exxcluir o aluno...";
}

?>