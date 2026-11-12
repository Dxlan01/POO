<?php
require_once "6.php";

$est1 = new Estudiante();
$est2 = new Estudiante();
$est3 = new Estudiante();

$est1->asignarDocumento("1005123456");
$est1->nombre = "Dylan Calero";
$est1->programa = "Análisis y Desarrollo de Software";
$est1->asignarNotas(4.5, 4.0, 3.8);

$est2->asignarDocumento("1005654321");
$est2->nombre = "David Oliveros";
$est2->programa = "Análisis y Desarrollo de Software";
$est2->asignarNotas(2.5, 3.0, 2.0);

$est3->asignarDocumento("1005987654");
$est3->nombre = "Juan Espinosa";
$est3->programa = "Análisis y Desarrollo de Software";
$est3->asignarNotas(3.0, 3.0, 3.0);

$est1->mostrarInformacion();
$est2->mostrarInformacion();
$est3->mostrarInformacion();
