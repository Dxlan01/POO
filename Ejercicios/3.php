<?php
require_once "3.3.php";

$Cuenta1 = new cuentaBancaria();
$Cuenta2 = new cuentaBancaria();


$Cuenta1->titular = "Dylan Calero";
$Cuenta1->numeroCuenta = 1019998764;
$Cuenta1->saldo = 2500;

$Cuenta2->titular = "María López";
$Cuenta2->numeroCuenta = 2023456789;
$Cuenta2->saldo = 5000;

echo "Cuenta 1: {$Cuenta1->titular} - {$Cuenta1->numeroCuenta} - Saldo: {$Cuenta1->consultarSaldo()}\n";
echo "Cuenta 2: {$Cuenta2->titular} - {$Cuenta2->numeroCuenta} - Saldo: {$Cuenta2->consultarSaldo()}\n";
