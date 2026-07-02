<?php
$aprovados = 0;
$alunos = [
    (object)["Caio", "Nota" => 60],
    (object)["Luan", "Nota" => 90],
    (object)["Laura", "Nota" => 90],
    (object)["Isabela", "Nota" => 100]
];
foreach ($alunos as $aluno) {
    if ($aluno->Nota >= 80) {
       
        $aprovados++;
    } 
}
echo "Total de alunos aprovados: " . $aprovados . "<br>";
?>