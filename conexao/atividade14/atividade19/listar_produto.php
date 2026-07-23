<?php 
//incluindo a conexao
include "banco.php";

//sql para selecionar todos os registros
$sql="SELECT * FROM form";

//criamos a variavel $resultado para guardar a consulta
$resultado = $conexao->query($sql);

//laço de repetição while(enquanto)
//fetch_assoc busca o registro no banco
while ($produtos = $resultado->fetch_assoc()){

//mostro o campo nome da tabela form
echo "Nomes de produtos com sucesso";


}

?>