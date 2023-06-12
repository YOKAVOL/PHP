<?php

class SimpleCar {
    private $marca;
    private $modelo;
    private $numSerie;
    
    public function __construct($marca, $modelo, $numSerie) {
        $this->marca = $marca;
        $this->modelo = $modelo;
        $this->numSerie = $numSerie;
    }
    
    public function getMarca() {
        return $this->marca;
    }
    
    public function getModelo() {
        return $this->modelo;
    }
    
    public function getNumSerie() {
        return $this->numSerie;
    }
        public function setMarca($marca) {
        $this->marca = $marca;
    }
        public function setModelo($modelo) {
        $this->modelo = $modelo;
    }
        public function setNumSerie($numSerie) {
        $this->numSerie = $numSerie;
    }
}

class Coche extends SimpleCar {
    private $añoLanz;
    private $color;
    private $claxon;
    
    public function __construct($marca, $modelo, $numSerie, $añoLanz, $color, $claxon) {
        parent::__construct($marca, $modelo, $numSerie);
        $this->añoLanz = $añoLanz;
        $this->color = $color;
        $this->claxon = $claxon;
    }
    
    public function getAñoLanz() {
        return $this->añoLanz;
    }
    
    public function getColor() {
        return $this->color;
    }
    
    public function getClaxon() {
        return $this->claxon;
    }
    
    public function setAñoLanz($añoLanz) {
        $this->añoLanz = $añoLanz;
    }
    
    public function setColor($color) {
        $this->color = $color;
    }
    
    public function setClaxon($claxon) {
        $this->claxon = $claxon;
    }
    
    public function sonarClaxon() {
        echo "El claxon suena: " . $this->claxon . "<br>";
    }
}

class CochePolicia extends Coche {
    private $sirena;
    
    public function __construct($marca, $modelo, $numSerie, $añoLanz, $sirena) {
        parent::__construct($marca, $modelo, $numSerie, $añoLanz, "blanco", "claxon");
        $this->sirena = $sirena;
    }
    
    public function getSirena() {
        return $this->sirena;
    }
    
    public function setSirena($sirena) {
        $this->sirena = $sirena;
    }
    
    public function sonarSirena() {
        echo "La sirena suena: " . $this->sirena . "<br>";
    }
}

class Multimedia {
    private $titulo;
    private $autor;
    private $formato;
    private $duracion;
    
    public function __construct($titulo, $autor, $formato, $duracion) {
        $this->titulo = $titulo;
        $this->autor = $autor;
        $this->formato = $formato;
        $this->duracion = $duracion;
    }

   


}

$renaultKoleos = new Coche("Renault", "Koleos", "123456", 2015, "blanco", "claxon");

// Pintar el coche de negro
$renaultKoleos->setColor("negro");

// Hacer sonar el claxon
$renaultKoleos->sonarClaxon();

// Crear un coche de policía
$cochePolicia = new CochePolicia("Ford", "Interceptor", "987654", 2020, "Sirena de policía");

// Hacer sonar el claxon
$cochePolicia->sonarClaxon();

// Hacer sonar la sirena
$cochePolicia->sonarSirena();


// Crear un Renault Koleos, del año 2015, blanco.
$renaultKoleos = new Coche("Renault", "Koleos", "123456", 2015, "blanco", "claxon");

// Pintar el coche de negro
$renaultKoleos->setColor("negro");

// Hacer sonar el claxon
echo "Renault Koleos: <br>";
echo "Marca: " . $renaultKoleos->getMarca() . "<br>";
echo "Modelo: " . $renaultKoleos->getModelo() . "<br>";
echo "Año de lanzamiento: " . $renaultKoleos->getAñoLanz() . "<br>";
echo "Color: " . $renaultKoleos->getColor() . "<br>";
$renaultKoleos->sonarClaxon();
echo "<br>";

// Crear un coche de policía
$cochePolicia = new CochePolicia("Ford", "Interceptor", "987654", 2020, "Sirena de policía");

// Hacer sonar el claxon y la sirena
echo "Coche de policía: <br>";
echo "Marca: " . $cochePolicia->getMarca() . "<br>";
echo "Modelo: " . $cochePolicia->getModelo() . "<br>";
echo "Año de lanzamiento: " . $cochePolicia->getAñoLanz() . "<br>";
echo "Color: " . $cochePolicia->getColor() . "<br>";
$cochePolicia->sonarClaxon();
$cochePolicia->sonarSirena();
echo "<br>";
