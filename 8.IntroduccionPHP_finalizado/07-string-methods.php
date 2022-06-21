<?php include 'includes/header.php';

$nombreCliente ='Daniel     ';


//Conocer longitus de un String
echo strlen($nombreCliente);

//Eliminar espacios en blanco
$texto= trim($nombreCliente);
echo strlen( $texto);
echo  $texto;

//Convertirlo a Mayúsculas

echo strtoupper($nombreCliente);

//Convertirlo a Minúsculas

echo strtolower($nombreCliente);

echo str_replace('Dani', 'Tom', $nombreCliente);

//revisar si un string existe o no

echo strpos($nombreCliente,'Dan');


$tipoCliente = 'Premium';
echo '<br>';

echo 'El cliente ' . $nombreCliente . ' es ' . $tipoCliente;

echo "El Cliente $nombreCliente es $tipoCliente";




include 'includes/footer.php';