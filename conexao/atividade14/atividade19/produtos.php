<?php 
include 'conexao.php';

$produto1 = $_POST['produto1'];
$produto2 = $_POST['produto2'];
$produto3 = $_POST['produto3'];


$sql = "INSERT INTO form ('produto1', 'ptoduto2', 'produto3') VALUES ($produto1, $produto2, $produto3)";

if ($conexao->query($sql)) {

    echo "<br> Os dados dos produtos foram salvos com sucesso!";
} else {
    echo "<br> Erro ao salvar  os dados dos produtos!";
}
?>