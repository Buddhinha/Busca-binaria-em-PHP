<?php
$fernando = rand(1, 100);

$menor = 1;
$maximo = 100;

$chute = (int)readline("qual o numero de fernandos que garcia toma por dia? \n");

while ($chute != $fernando) {



  if ($chute> $fernando) {
    echo "Garcia toma menos fernandos por dia\n";
    $maximo = $chute;
} elseif ($chute < $fernando) {
    echo "Garcia toma mais fernandos por dia\n";
    $minimo = $chute;
} else {
    break;
}

$chute = (int)readline("tente novamente \n");
}

echo"Garcia toma  $fernando fernandos por dia.  \n"

?>
