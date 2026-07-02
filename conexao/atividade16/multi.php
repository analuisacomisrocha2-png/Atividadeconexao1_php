<?php 
include 'conexaomult.php';

$num1 = $_POST['num1'];
$num2 = $_POST['num2'];
$num3 = $_POST['num3'];
$resultado = $num1 * $num2 * $num3;

$sql = "INSERT INTO multiplicacao (numero1, numero2, numero3, resultado) VALUES ($num1, $num2, $num3, $resultado)";

if ($conexao->query($sql)) {

    echo "<br> Os dados da multiplicação dos três números foram salvos com sucesso!";
} else {
    echo "<br> Erro ao salvar  os dados da multiplicação!";
}
?>