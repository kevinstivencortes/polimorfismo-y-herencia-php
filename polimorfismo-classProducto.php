<?php
class Producto{

public $strDescripcion;
public $fltPrecio;
public $intStockMinimo = 10;
protected $strStatus = "activo";

public function __construct (string $descripcion, float $precio){
    $this -> strDescripcion = $descripcion;
    $this -> fltPrecio = $precio;
}
public function getInforProducto (){
    $arrProducto = array (
        "productos" => $this -> strDescripcion,
        "precio" => $this -> fltPrecio,
        "stok minimo" => $this -> intStockMinimo,
        "estado"=> $this -> strStatus
    );
    return $arrProducto;
}
}




?>