<?php
class Usuario {
    public string $nombre;
    public function mostrar()
    {
        echo "El nombre es: {$this->nombre}";
    }
    }