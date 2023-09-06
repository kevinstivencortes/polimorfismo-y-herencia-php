<?php
require_once("classPersona.php");
class Empleado extends persona{

    protected $strPuesto;

    public function __construct (int $DPI, string $nombre, string $edad){
        parent:: __construct($DPI,  $nombre,  $edad);
    }

    function setPuesto ($puesto){
        $this -> strPuesto =$puesto;
    }

    function getPuesto (){
        return $this -> strPuesto;
    }

}

?>