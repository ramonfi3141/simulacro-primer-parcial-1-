<?php

include "Prestamo.php";


$nuevoPrestamo= new Prestamo("",0,0,0,"");

$nuevoPrestamo->setIndenti(1);
$nuevoPrestamo->setMonto(500);
$nuevoPrestamo->setCantidadCuotas(3);
$nuevoPrestamo->setTazaI(15);
$nuevoPrestamo->setCliente("Ramon Quintrileo");



echo $nuevoPrestamo ."\n";







?>