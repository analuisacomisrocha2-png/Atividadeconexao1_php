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
echo "Titulo:".$cliente['titulo']."<br>";
echo "Autor:".$cliente['autor']."<br>";
echo "Editora:".$cliente['departamento']."<br>";
echo "Ano da publicacao:".$cliente['salario']."<br>";
echo "Entrega:".$cliente['entrega']."<br>";

echo "<a href='funcionario.php?id= ". $cliente['id'] . "'> <button> Editar </button> <a/>";

echo "<hr>";

}

?>