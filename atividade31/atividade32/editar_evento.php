<?php 
include 'banco.php';

$nome=$_POST['nome'];
$data=$_POST['data'];
$horario=$_POST['horario'];
$local=$_POST['local'];
$cidade=$_POST['cidade'];
$vagas=$_POST['vagas'];


$sql = "INSERT INTO form ('nome', 'data', 'horario', 'local', 'cidade', 'vagas') VALUES ($nome, $data, $horario, $local, $cidade, $vagas)";

if ($conexao->query($sql)) {

    echo "<br> Os dados dos eventos foram salvos com sucesso!";
} else {
    echo "<br> Erro ao salvar  os dados dos eventos!";
}
?>