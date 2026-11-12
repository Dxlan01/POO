<?php
require_once "5.php";

$cuenta1 = new CuentaBancaria();
$cuenta2 = new CuentaBancaria();

$cuenta1->titular = "Dylan Calero";
$cuenta1->numeroCuenta = "001-123456";
$cuenta1->asignarSaldoInicial(500000);

$cuenta2->titular = "David Oliveros";
$cuenta2->numeroCuenta = "001-654321";
$cuenta2->asignarSaldoInicial(200000);

echo "<b>Cuenta 1</b><br>";
$cuenta1->mostrarInformacion();
$cuenta1->depositar(100000);
$cuenta1->retirar(50000);
$cuenta1->retirar(2000000); // debe fallar: saldo insuficiente
$cuenta1->depositar(-500);  // debe fallar: valor inválido

echo "<br><b>Cuenta 2</b><br>";
$cuenta2->mostrarInformacion();
$cuenta2->depositar(30000);
$cuenta2->retirar(0);       // debe fallar: valor inválido
$cuenta2->retirar(80000);

echo "<br><b>Saldos finales</b><br>";
echo $cuenta1->titular . " -> ";
$cuenta1->consultarSaldo();
echo $cuenta2->titular . " -> ";
$cuenta2->consultarSaldo();
