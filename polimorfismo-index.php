<?php
/* require_once ("classProducto.php");
require_once ("classMueble.php"); */
require_once ("classMesa.php");

/* $objProducto = new Producto( "mueble",1000.0); 
print_r ("<pre>");
print_r ($objProducto -> getInforProducto()) ;
print_r ("</pre>");
print_r ("<pre>");
$objMueble =new Mueble ("mueble",1000.0 , "rojo", "madera" );
print_r ($objMueble -> getInforProducto());
print_r ("</pre>"); */


function dep ($data){
    $format = print_r("<pre>");
    $format .= print_r($data);
    $format .= print_r("<pre>");
    return $format;
}

$objProducto = new Producto( "mesa",1000.0);
$arrInfor =$objProducto->getInforProducto();
dep($arrInfor);

echo "<br>";
$objMueble = new Mueble("mesa", 2000.0, "negro", "madera");
$arrInfor =$objMueble->getInforProducto();
dep($arrInfor);

/* echo "<br>";
$objMueble = new Mesa("mesa", 3000.0, "negro", "pino", "grande","cuadrada");

$arrInfor =$objMesa->getInforProducto();
dep($arrInfor); */

print_r ("<pre>");
$objMesa =new Mesa ("mueble",1000.0 , "rojo", "madera", "redonda", "grande");
print_r ($objMesa -> getInforProducto());
$objMesa -> setForma ("grande");
print_r ("</pre>");


















?>