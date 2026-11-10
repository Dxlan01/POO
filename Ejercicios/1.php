<?php
require_once "1.1.php";

$persona1 = new persona();
$persona2 = new persona();
$persona3 = new persona();

$persona1->setNom("Dylan");
$persona1->setApell("Calero");
$persona1->setEdad("17");
$persona1->setCiudad("Ibague");

$persona2->setNom("David");
$persona2->setApell("Oliveros");
$persona2->setEdad("18");
$persona2->setCiudad("Ibague");

$persona3->setNom("Juan");
$persona3->setApell("Espinosa");
$persona3->setEdad("17");
$persona3->setCiudad("Ibague");

$persona1->MostrarInformacion();
$persona2->MostrarInformacion();
$persona3->MostrarInformacion();