    2|<?php
class Persona {
    private string $nom;
    private string $apell;
    private int $edad;
    private string $ciudad;
    public function setNom(string $nom) {
        return $this->nom = $nom;
    }
    public function getNom(){
        return $this->nom;
    }
    public function setApell(string $apell){
        return $this->apell = $apell;
    }
    public function getApell(){
        return $this->apell;
    }
    public function setEdad(int $edad){
        return $this->edad = $edad;
    }
    public function getEdad(){
        return $this->edad;
    }
    public function setCiudad(string $ciudad){
        return $this-> ciudad = $ciudad;
    }
    public function getCiudad(){
        return $this->ciudad;
    }
    public function MostrarInformacion(){
        echo "El nombre es: ".$this->nom."<br>"."El apellido es: ".$this->apell."<br>"."Su edad es: ".$this->edad."<br>"."Viven en: ".$this->ciudad;
    }

}