<?php
require_once "2.2.php";

$Producto1 = new producto();
$Producto2 = new producto();

$Producto1->code = 1;
$Producto1->name = "Panela";
$Producto1->cant = 10;
$Producto1->price = 8000;

$Producto2->code = 2;
$Producto2->name = "Aguacate";
$Producto2->cant = 5;
$Producto2->price = 10000;

echo "Producto 1:\n";
$Producto1->mostrarProducto();
$Producto1->calcularInventario();

echo "\nProducto 2:\n";
$Producto2->mostrarProducto();
$Producto2->calcularInventario();

echo "\nActualizando precio del producto 1...\n";
$Producto1->actualizarPrecio(5000);

echo "\nProducto 1 actualizado:\n";
$Producto1->mostrarProducto();
$Producto1->calcularInventario();