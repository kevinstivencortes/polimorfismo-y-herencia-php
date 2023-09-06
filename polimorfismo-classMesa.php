<?php
require_once ("classMueble.php");
class Mesa extends Mueble{
    public $strForma;
    public $strtamaño;

    public function __construct (string $descripcion, float $precio, string $color, string $material, string $forma, string $tamaño){
        parent :: __construct ($descripcion, $precio, $color, $material);
        $this-> strForma = $forma;
        $this-> strTamaño = $tamaño;
    }

    public function getInforProducto(){
        $arrProducto = array (
            "productos" => $this -> strDescripcion,
            "prescio" => $this -> fltPrecio,
            "stok minimo" => $this -> intStockMinimo,
            "estado"=> $this -> strStatus,
            "color"=> $this -> strColor,
            "material"=> $this -> strMaterial,
            "forma"=> $this -> strForma,
            "tamaño"=> $this -> strtamaño
        );
        return $arrProducto;
    }

    public function setForma (string $forma){
        $this -> strForma =$forma;
    }
    public function getForma(){
        return $this -> strForma;
    }



}





?>