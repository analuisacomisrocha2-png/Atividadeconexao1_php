<?php 
//incluindo a conexao
include "banco.php";

//sql para selecionar todos os registros
$sql="SELECT * FROM form";

//criamos a variavel $resultado para guardar a consulta
$resultado = $conexao->query($sql);

//laço de repetição while(enquanto)
//fetch_assoc busca o registro no banco
while ($produto = $resultado->fetch_assoc()){

//mostro o campo nome da tabela form
echo "Nome:".$produto['nome']."<br>";
echo "Categoria:".$produto['categoria']."<br>";
echo "Quantidade:".$produto['quantidade']."<br>";
echo "Preço:".$produto['preço']."<br>";
echo "Entrega:".$produto['entrega']."<br>";

echo "<a href='produto.php?id= ". $produto['id'] . "'> <button> Enviar </button> <a/>";

echo "<hr>";

}

?>