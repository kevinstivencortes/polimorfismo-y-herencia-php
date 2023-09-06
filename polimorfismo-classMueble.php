<?php
require_once ("classProducto.php");
class Mueble extends Producto{
    public $strColor;
    public $strMaterial;
    public $strStatus = "agotado";

    public function __construct (string $descripcion, float $precio, string $color, string $material){
        parent ::__construct ($descripcion, $precio);
        $this-> strColor = $color;
        $this-> strMaterial = $material;
    }

    public function getInforProducto(){
        $arrProducto = array (
            "productos" => $this -> strDescripcion,
            "prescio" => $this -> fltPrecio,
            "stok minimo" => $this -> intStockMinimo,
            "estado"=> $this -> strStatus,
            "color"=> $this -> strColor,
            "material"=> $this -> strMaterial
        );
        return $arrProducto;
    }



}





?>