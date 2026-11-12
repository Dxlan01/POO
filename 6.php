<?php
class Estudiante {
    private string $documento;
    public string $nombre;
    public string $programa;
    private float $nota1 = 0;
    private float $nota2 = 0;
    private float $nota3 = 0;

    public function asignarDocumento(string $documento) {
        $this->documento = $documento;
    }

    public function consultarDocumento(): string {
        return $this->documento;
    }

    private function notaValida(float $nota): bool {
        return $nota >= 0.0 && $nota <= 5.0;
    }

    public function asignarNotas(float $nota1, float $nota2, float $nota3) {
        if ($this->notaValida($nota1) && $this->notaValida($nota2) && $this->notaValida($nota3)) {
            $this->nota1 = $nota1;
            $this->nota2 = $nota2;
            $this->nota3 = $nota3;
        } else {
            echo "Error: las notas deben estar entre 0.0 y 5.0<br>";
        }
    }

    public function calcularPromedio(): float {
        return ($this->nota1 + $this->nota2 + $this->nota3) / 3;
    }

    public function determinarEstado(): string {
        return $this->calcularPromedio() >= 3.0 ? "Aprobó" : "Reprobó";
    }

    public function mostrarInformacion() {
        echo "Documento: " . $this->documento . "<br>"
            . "Nombre: " . $this->nombre . "<br>"
            . "Programa: " . $this->programa . "<br>"
            . "Nota 1: " . $this->nota1 . "<br>"
            . "Nota 2: " . $this->nota2 . "<br>"
            . "Nota 3: " . $this->nota3 . "<br>"
            . "Promedio: " . number_format($this->calcularPromedio(), 2) . "<br>"
            . "Estado: " . $this->determinarEstado() . "<br><br>";
    }
}
