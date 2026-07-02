<?php
$candidatos = [
    (object)["João", "Nota" => 80],
    (object)["Rafael", "Nota" => 50],
    (object)["Daniel", "Nota" => 100]
];

foreach ($candidatos as $candidato) {
    if ($candidato->Nota >= 70) {
        echo "O candidato " . $candidato[0] . " foi aprovado com a nota " . $candidato->Nota . ".<br>";
    } else {
        echo "O candidato " . $candidato[0] . " foi reprovado com a nota " . $candidato->Nota . ".<br>";
    }

    echo "Candidato:" . $candidato[0] . ", Nota:" . $candidato->Nota . "<br>";
}

?>