<?php
class CuentaBancaria {
    public string $titular;
    public int $numeroCuenta;
    private int $saldo = 0;

    function depositar(int $valor) {
        if ($valor > 0) {
            $this->saldo += $valor;
            echo "Se ha depositado dinero: $valor";
        } else {
            echo "El valor a depositar debe ser mayor que 0.";
        }
    }

    function retirar(int $valor) {
        if ($valor > 0 && $valor <= $this->saldo) {
            $this->saldo -= $valor;
            echo "Se ha retirado dinero: $valor";
        } else {
            echo "No se puede retirar esa cantidad.";
        }
    }

    function consultarSaldo() {
        return $this->saldo;
    }

    function mostrarInformacion() {
        echo "Titular: {$this->titular}<br>";
        echo "Número de cuenta: {$this->numeroCuenta}<br>";
        echo "Saldo: {$this->saldo}";
    }
}