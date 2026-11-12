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

    public function consultarDocumento(){
        return $this->documento;
    }

    private function notaValida(float $nota) {
        return $nota >= 0.0 && $nota <= 5.0;
    }

    public function asignarNotas(float $nota1, float $nota2, float $nota3) {
        if ($this->notaValida($nota1) && $this->notaValida($nota2) && $this->notaValida($nota3)) {
            $this->nota1 = $nota1;
            $this->nota2 = $nota2;
            $this->nota3 = $nota3;
        } else {
            echo "Error: las notas deben estar entre 0.0 y 5.0\n";
        }
    }

    public function calcularPromedio(){
        return ($this->nota1 + $this->nota2 + $this->nota3) / 3;
    }

    public function determinarEstado(): string {
        return $this->calcularPromedio() >= 3.0 ? "Aprobó" : "Reprobó";
    }

    public function mostrarInformacion() {
        echo "Documento: " . $this->documento . "\n"
            . "Nombre: " . $this->nombre . "\n"
            . "Programa: " . $this->programa . "\n"
            . "Nota 1: " . $this->nota1 . "\n"
            . "Nota 2: " . $this->nota2 . "\n"
            . "Nota 3: " . $this->nota3 . "\n"
            . "Promedio: " . number_format($this->calcularPromedio(), 2) . "\n"
            . "Estado: " . $this->determinarEstado() . "\n \n";
    }
}
