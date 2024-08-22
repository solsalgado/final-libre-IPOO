<?php 
include_once "puesto.php";
include_once "tramite.php";
include_once "transito.php";
include_once "transporte.php";
include_once "comercio.php";
include_once "municipalidad.php";

$objTransito = new Transito(12, "tramite 1", 150, 1234, "renault", 2007);
$objTransporte = new Tranporte(34, "tramite 2", 200, 1998, 40, "combi");

$arrayTramites = [];
$arrayTramites = [$objTransito, $objTransporte];

$objTransito2 = new Transito(8, "tramite 3", 150, 5413, "mercedes benz", 2021);
$objComercio = new Comercio(54, "tramite 4", 80, "indumentaria");

$arrayTramites2 = [];
$arrayTramites2 = [$objTransito2];

echo "----punto 1----";
$objPuesto = new Puesto(1, "puesto uno", $arrayTramites);
$objPuesto2 = new Puesto(2, "puesto dos", $arrayTramites2);
//echo $objPuesto. $objPuesto2. "\n";

$arrayPuestos = [];
$arrayPuestos = [$objPuesto, $objPuesto2];

echo "----punto 2----";
$objMunicipalidad = new Municipalidad($arrayPuestos);
//echo $objMunicipalidad. "\n";

echo "----punto 3----";
$objTransito3 = new Transito(43, "tramite 5", 150, 8753, "renault", 1992);
$objTransporte2 = new Tranporte(33, "tramite 6", 200, 2004, 35, "combi");
$objComercio2 = new Comercio(68, "tramite 7", 100, "repuestos");
//echo $objTransito3. $objTransporte2,$objComercio2. "\n";

/*$a = $objPuesto->incorporarTramite($objTransporte);
echo $a. "\n";*/

echo "----punto 4----";
$asignar = $objMunicipalidad->asignarPuestoAtencion($objTransporte2);

print_r($asignar);

