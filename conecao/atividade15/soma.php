<?php 
include 'conexao.php';

$num1 = $_POST['num1'];
$num2 = $_POST['num2'];
$resultado = $num1 + $num2;

$sql = "INSERT INTO calculo (numero1, numero2, resultado) VALUES ($num1, $num2, $resultado)";

if ($conexao->query($sql)) {

    echo "<br> Os dados da soma dos dois números foram salvos com sucesso!";
} else {
    echo "<br> Erro ao salvar  os dados da soma!";
}
?>