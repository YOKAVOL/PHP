<?php
class Multimedia
{
    private $titulo;
    private $autor;
    private $formato;
    private $duracion;

    public function __construct($titulo, $autor, $formato, $duracion)
    {
        $this->titulo = $titulo;
        $this->autor = $autor;
        $this->formato = $formato;
        $this->duracion = $duracion;
    }

    public function getTitulo()
    {
        return $this->titulo;
    }

    public function getAutor()
    {
        return $this->autor;
    }

    public function getFormato()
    {
        return $this->formato;
    }

    public function getDuracion()
    {
        return $this->duracion;
    }

    public function setTitulo($titulo)
    {
        $this->titulo = $titulo;
    }

    public function setAutor($autor)
    {
        $this->autor = $autor;
    }

    public function setFormato($formato)
    {
        $this->formato = $formato;
    }

    public function setDuracion($duracion)
    {
        $this->duracion = $duracion;
    }

    public function imprimir()
    {
        echo "Título: " . $this->titulo . "<br>";
        echo "Autor: " . $this->autor . "<br>";
        echo "Formato: " . $this->formato . "<br>";
        echo "Duración: " . $this->duracion . " minutos<br>";
    }

    public function esIgual(Multimedia $objeto)
    {
        return ($this->titulo === $objeto->getTitulo() && $this->autor === $objeto->getAutor());
    }
}

class Pelicula extends Multimedia
{
    private $actorPrincipal;
    private $actrizPrincipal;

    public function __construct($titulo, $autor, $formato, $duracion, $actorPrincipal, $actrizPrincipal = null)
    {
        parent::__construct($titulo, $autor, $formato, $duracion);
        $this->actorPrincipal = $actorPrincipal;
        $this->actrizPrincipal = $actrizPrincipal;
    }

    public function getActorPrincipal()
    {
        return $this->actorPrincipal;
    }

    public function getActrizPrincipal()
    {
        return $this->actrizPrincipal;
    }

    public function setActorPrincipal($actorPrincipal)
    {
        $this->actorPrincipal = $actorPrincipal;
    }

    public function setActrizPrincipal($actrizPrincipal)
    {
        $this->actrizPrincipal = $actrizPrincipal;
    }

    public function imprimir()
    {
        parent::imprimir();
        echo "Actor principal: " . $this->actorPrincipal . "<br>";
        echo "Actriz principal: " . $this->actrizPrincipal . "<br>";
    }
}

class ListaMultimedia
{
    private $objetos;
    private $contador;
    private $maxObjetos;

    public function __construct($maxObjetos)
    {
        $this->objetos = array();
        $this->contador = 0;
        $this->maxObjetos = $maxObjetos;
    }

    public function dameTamaño()
    {
        return $this->contador;
    }

    public function addObjeto(Multimedia $objeto)
    {
        if ($this->contador < $this->maxObjetos) {
            $this->objetos[] = $objeto;
            $this->contador++;
            return false;
        } else {
            return true;
        }
    }

    public function getObjeto($posicion)
    {
        if ($posicion >= 0 && $posicion < $this->contador) {
            return $this->objetos[$posicion];
        } else {
            return null;
        }
    }

    public function imprimirLista()
    {
        foreach ($this->objetos as $objeto) {
            $objeto->imprimir();
            echo "<br>";
        }
    }
}

$listaMultimedia = new ListaMultimedia(10);

$pelicula1 = new Pelicula("Título de la Película 1", "Autor 1", "Formato 1", 120, "Actor 1", "Actriz 1");
$pelicula2 = new Pelicula("Título de la Película 2", "Autor 2", "Formato 2", 90, "Actor 2");
$pelicula3 = new Pelicula("Título de la Película 3", "Autor 3", "Formato 3", 105, "Actor 3", "Actriz 3");

$listaMultimedia->addObjeto($pelicula1);
$listaMultimedia->addObjeto($pelicula2);
$listaMultimedia->addObjeto($pelicula3);

$listaMultimedia->imprimirLista();

?>
