<?php
require_once("classPersona.php");
class Cliente extends persona{

    private $strCreditos;

    public function __construct (int $DPI, string $nombre, string $edad){
        parent:: __construct($DPI,  $nombre,  $edad);
    }
    
    public function setCredito(string $credito){
        $this -> strCredito =$credito;
    }

    public function getCredito(){
        return $this -> strCredito;
    }
}

?>