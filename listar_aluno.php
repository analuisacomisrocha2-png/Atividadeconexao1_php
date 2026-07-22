<?php 
//incluindo a conexao
include "banco.php";

//sql para selecionar todos os registros
$sql="SELECT * FROM form";

//criamos a variavel $resultado para guardar a consulta
$resultado = $conexao->query($sql);

//laço de repetição while(enquanto)
//fetch_assoc busca o registro no banco
while ($aluno = $resultado->fetch_assoc()){

//mostro o campo nome da tabela form
echo "Nome:".$aluno['nome']."<br>";
echo "Idade:".$aluno['idade']."<br>";
echo "Curso:".$aluno['cuso']."<br>";
echo "Cidade".$aluno['cidade']."<br>";
echo"Entrega".$entrega['entrega']."<br>";

echo "<a href='excluir_aluno.php?id= ". $aluno['id'] . "'> <button> Excluir </button> <a/>";

echo "<hr>";

}

?>