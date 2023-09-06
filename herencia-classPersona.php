<?php
class Persona{
    //propiedades
    private $intDPI;
    private $strNombre;
    private $strEdad;

    function __construct(int $DPI, string $nombre, string $edad){
        $this -> intDPI =$DPI;
        $this -> strNombre =$nombre;
        $this -> strEdad =$edad;
    }

    function getDatosPersonales(){

        $datos ="<h1>Datos personales</h1> 
        DPI: {$this -> intDPI}<br>
        Nombre: {$this -> strNombre}<br>
        Edad: {$this -> strEdad}<br>
        ";
        return $datos;
    }








}
?>