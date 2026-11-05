<?php
class Usuario2
{
    private string $nom;
    private string $apell;

    public function setNom(string $nom) {
        $this->nom = $nom;
    }
    public function getnom(): string {
        return $this->nom;
    }
    public function setApell(string $apell) {
        $this->apell = $apell;
    }
    public function getApell(): string {
        return $this->apell;
    }
    public function MostrarTodo() {
        echo "El nombre es: ".$this->getnom(). " y el apellido es: ".$this->getApell();
    }
}