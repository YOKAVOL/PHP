<!DOCTYPE html>
<html>

<head>
    <title>Ejemplo</title>
</head>

<body>

    <?php

    class Persona
    {
        // atributos de la clase
        var $nombre;
        var $apellidos;
        var $edad;

        function __construct($nombre, $apellidos, $edad)
        {
            $this->nombre = $nombre;
            $this->apellidos = $apellidos;
            $this->edad = $edad;
        }
        // getters - Nombre por convconvención: get + nombre del atributo. 
        public function getNombre()
        {
            return $this->nombre;

        }
        public function getApellido()
        {
            return $this->apellidos;
        }
        public function getEdad()
        {
            return $this->edad;
        }
        //setters - Nombre por convconvención: set + nombre del 
        public function setNombre($nombre)
        {
            $this->nombre = $nombre;
        }
        public function setApellidos($apellidos)
        {
            $this->apellidos = $apellidos;
        }
        public function setEdad($edad)
        {
            $this->edad = $edad;
        }

        //Métodos de una clase
    
        public function mayorEdad()
        {

            $edad = $this->edad;

            if ($edad > 18) {

                echo "Es mayor Edad <br>";

            } else {

                echo "Es menor de edad <br>";

            }

        }
        public function nombreCompleto()
        {
            echo "dentro de la funcion nombre completo<br>";
            echo "nombre :  $this->nombre  ";
            echo "  ";

            echo "apellidos :  $this->apellidos";
            echo " ";
            echo "<br>";
            echo "Edad :   $this->edad";
            echo " ";
            echo "<br>";

        }

    }

    $persona = new Persona("Yolanda", "jimenez diez", 25);
    $persona2 = new Persona("Jesus", "Perez Sanz", 12);

    $persona->mayorEdad(); //Llamada al método Mayor de Edad
    $persona->nombreCompleto(); //Llamada al método Nombre Completo

    $persona2->mayorEdad(); //Llamada al método Mayor de Edad
    $persona2->nombreCompleto(); //Llamada al método Nombre Completo
    ?>

</body>


</html>