<?php 

    define("PI", 3.1416);
    echo PI;
    
    $nombre="Carlos";

    $nombre="Adrián";

    echo $nombre;
    echo $nombre;

    $frutas=["limon","pera"];

    $personas=["nombre" => "Juan", "edad" =>30];

    class Persona{
        public $nombre;
        public $edad;
    }

    $oNombre = new Persona();
    $oNombre->nombre ="Juan";
    $oNombre->edad=30;
    var_dump($oNombre);

    echo $oNombre->nombre;
    echo $oNombre->edad;
    ?>