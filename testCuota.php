<?php

include "Cuota.php";

//($num, $monto, $interes)
$nuevaCuota= new Cuota(0,0,0);

echo"ingrese numero de cuota :\n";
$nuevaCuota->setNumero(trim(fgets(STDIN)));
echo"ingrese el monto de la cuota :\n";
$nuevaCuota->setMonto(trim(fgets(STDIN)));
echo "ingrese intereses : \n";
$nuevaCuota->setMontInt(trim(fgets(STDIN)));


echo "seleccione estado de cuota :\n" . " 0 : no adeuda cuotas  \n" . " 1 : adeuda cuota  \n";
$estado=trim(fgets(STDIN));

    if ($estado) {
        $nuevaCuota->darMontoFinalCuota();
        echo "cuota final al dia de hoy es : " . $nuevaCuota->darMontoFinalCuota() . "\n";
        $estado=$nuevaCuota->darMontoFinalCuota() ;
    }else {
        echo "cuota final al dia de hoy es : " .  $nuevaCuota->getMonto() . "\n";
        $estado=$nuevaCuota->getMonto() ;
    }


$nuevaCuota->setCancelada($estado);
echo "******************** RESUMEN DE CUOTA ********************\n";
echo $nuevaCuota;

echo"***********************************************************\n"


?>