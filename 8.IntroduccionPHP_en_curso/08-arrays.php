<?php include 'includes/header.php';

$carrito = ['Tablet', 'Televisión', 'Computadora'];


//Acceder a un elemento del Array
echo $carrito[1];

//Añade un elemento en el índice 3 del array
$carrito[3] = 'Nuevo Producto...';

//Añadir un elemento al final del array
array_push($carrito, 'Audífonos');

//Añadir un elemento al inicio del array
array_unshift($carrito, 'Tablet 2');


//Util para ver los contenidos de un Array
echo '<pre>';
var_dump($carrito);
echo '</pre>';




include 'includes/footer.php';