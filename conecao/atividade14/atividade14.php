<?php 
include 'conexao.php';

$num1 = 20;
$num2 = 90;
$num3 = 8;
$resultado = $num1 - $num2 - $num3;

$sql = "INSERT INTO subtracao (numero1, numero2, numero3, resultado) VALUES ($num1, $num2, $num3, $resultado)";

if ($conexao->query($sql)) {

    echo "<br> Os dados da subtração dos três números foram salvos com sucesso!";
} else {
    echo "<br> Erro ao salvar  os dados da subtração!";
}
?>