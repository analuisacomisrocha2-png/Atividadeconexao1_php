<?php
$aprovados = 0;
$reprovados = 0;
$alunos = [
    (object)["Alicia", "Nota" => 90],
    (object)["Ana", "Nota" => 60],
    (object)["Gabiela", "Nota" => 50],
    (object)["Hadryan", "Nota" => 90],
    (object)["Kauan", "Nota" => 100]
];
foreach ($alunos as $aluno) {
    if ($aluno->Nota >= 80) {
        $aprovados++;
    } else {
        $reprovados++;
    }
}
echo "Total de alunos aprovados: " . $aprovados . "<br>";
echo "Total de alunos reprovados: " . $reprovados . "<br>";
?>