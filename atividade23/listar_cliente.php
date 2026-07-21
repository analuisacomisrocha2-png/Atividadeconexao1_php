<?php 
//incluindo a conexao
include "banco.php";

//sql para selecionar todos os registros
$sql="SELECT * FROM form";

//criamos a variavel $resultado para guardar a consulta
$resultado = $conexao->query($sql);

//laço de repetição while(enquanto)
//fetch_assoc busca o registro no banco
while ($cliente = $resultado->fetch_assoc()){

//mostro o campo nome da tabela form
echo "Nome:".$cliente['nome']."<br>";
echo "Idade:".$cliente['idade']."<br>";
echo "Email:".$cliente['email']."<br>";
echo "Telefone".$cliente['telefone']."<br>";
echo "Cidade".$cliente['cidade']."<br>";

echo "<a href='editar_cliente.php?id= ". $cliente['id'] . "'> <button> Editar </button> <a/>";
echo "<a href='excluir_cliente.php?id= ". $cliente['id'] . "'> <button> Excluir </button> <a/>";

echo "<hr>";

}

?>