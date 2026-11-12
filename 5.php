<?php
class CuentaBancaria {
    public string $titular;
    public string $numeroCuenta;
    private float $saldo = 0;

    // Permite asignar el saldo inicial (solo si no es negativo)
    public function asignarSaldoInicial(float $valor) {
        if ($valor >= 0) {
            $this->saldo = $valor;
        } else {
            echo "El saldo inicial no puede ser negativo.<br>";
        }
    }

    public function depositar(float $valor) {
        if ($valor <= 0) {
            echo "Error: el depósito debe ser mayor a cero.<br>";
            return;
        }
        $this->saldo += $valor;
        echo "Depósito exitoso de $" . number_format($valor, 0, ',', '.') . "<br>";
    }

    public function retirar(float $valor) {
        if ($valor <= 0) {
            echo "Error: el retiro debe ser mayor a cero.<br>";
            return;
        }
        if ($valor > $this->saldo) {
            echo "Error: saldo insuficiente para retirar $" . number_format($valor, 0, ',', '.') . "<br>";
            return;
        }
        $this->saldo -= $valor;
        echo "Retiro exitoso de $" . number_format($valor, 0, ',', '.') . "<br>";
    }

    public function consultarSaldo() {
        echo "Saldo disponible: $" . number_format($this->saldo, 0, ',', '.') . "<br>";
    }

    public function mostrarInformacion() {
        echo "Titular: " . $this->titular . "<br>"
            . "Número de cuenta: " . $this->numeroCuenta . "<br>"
            . "Saldo: $" . number_format($this->saldo, 0, ',', '.') . "<br>";
    }
}
