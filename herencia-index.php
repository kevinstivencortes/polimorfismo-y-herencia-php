<?php
require_once ("classPersona.php");
require_once ("classEmpleado.php");
require_once ("classCliente.php");
//empleado
$objEmpleado = new Empleado("mueble", 1000,18); 
$objEmpleado->setPuesto("administrador");

echo $objEmpleado -> getDatosPersonales();
echo "<br>";
echo "puesto:". $objEmpleado -> getPuesto();


//cliente
$objCliente = new cliente(19, "kevin",18); 
$objCliente->setCredito("3");

echo $objCliente -> getDatosPersonales();
echo "<br>";
echo "creditos:". $objCliente -> getCredito();


?>