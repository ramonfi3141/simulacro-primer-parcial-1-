<?php

include "Cuota.php";


$nuevaCuota= new Cuota(0,0,0);


$nuevaCuota->setNumero(trim(fgets(STDIN)));
$nuevaCuota->setMonto(trim(fgets(STDIN)));
$nuevaCuota->setMontInt(trim(fgets(STDIN)));

echo "la cuota esta cancelada ?\n";
$nuevaCuota->setCancelada(trim(fgets(STDIN)));

    if ($nuevaCuota->setCancelada("si")) {
        $nuevaCuota;
    }


?>