<?php
class Producto {
    public string $codigo;
    public string $nombre;
    public float $precio;
    public int $cantidad;

    public function mostrarProducto() {
        echo "Código: " . $this->codigo . "<br>"
            . "Nombre: " . $this->nombre . "<br>"
            . "Precio: $" . number_format($this->precio, 0, ',', '.') . "<br>"
            . "Cantidad: " . $this->cantidad . "<br>";
    }

    public function calcularInventario(): float {
        return $this->precio * $this->cantidad;
    }

    public function actualizarPrecio(float $nuevoPrecio) {
        $this->precio = $nuevoPrecio;
    }
}
