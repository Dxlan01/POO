<?php
require_once "4.php";

$producto1 = new Producto();
$producto2 = new Producto();

$producto1->codigo = "P001";
$producto1->nombre = "Teclado";
$producto1->precio = 50000;
$producto1->cantidad = 10;

$producto2->codigo = "P002";
$producto2->nombre = "Mouse";
$producto2->precio = 25000;
$producto2->cantidad = 20;

$producto1->mostrarProducto();
echo "Valor del inventario: $" . number_format($producto1->calcularInventario(), 0, ',', '.') . "<br><br>";

$producto2->mostrarProducto();
echo "Valor del inventario: $" . number_format($producto2->calcularInventario(), 0, ',', '.') . "<br><br>";

// Actualizar el precio de un producto
$producto1->actualizarPrecio(60000);
echo "--- Después de actualizar el precio ---<br>";
$producto1->mostrarProducto();
echo "Valor del inventario: $" . number_format($producto1->calcularInventario(), 0, ',', '.') . "<br>";
