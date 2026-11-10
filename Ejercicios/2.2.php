<?php
class Producto {
    public int $code;
    public string $name;
    public int $price;
    public int $cant;

    public function mostrarProducto() {
        echo "Codigo del producto: " . $this->code . "\n";
        echo "Nombre del producto: " . $this->name . "\n";
        echo "Precio del producto: " . $this->price . "\n";
        echo "Cantidad Disponible: " . $this->cant . "\n";
    }

    public function calcularInventario() {
        echo "El total del inventario es: " . ($this->price * $this->cant) . "\n";
    }

    public function actualizarPrecio(int $nuevoPrecio) {
        $this->price = $nuevoPrecio;
        echo "El nuevo precio del producto es: " . $this->price . "\n";
        echo "Producto actualizado:\n";
        $this->mostrarProducto();
    }
}