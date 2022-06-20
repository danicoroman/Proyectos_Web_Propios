<?php include 'includes/header.php';

//in_array - buscar elementos en un Array

$carrito = ['Tablet', 'Computadora', 'Televisión'];

var_dump(in_array('Tablet', $carrito));
var_dump(in_array('Audífonos', $carrito));



//Ordenar elementos de un array
$numeros = array(1,3,4,5,1,2);
sort($numeros); // de menor a mayor
rsort($numeros); // de mayor a menor


echo '<pre>';
var_dump($numeros);
echo '</pre>';


//Ordenar Array asociativo
$cliente = [
    'saldo' => 200,
    'tipo' => 'Premium',
    'nombre' => 'Dani'
];

asort($cliente); //Ordena por valores (Orden alfabético)
arsort($cliente); //Ordena por valores (Orden alfabético inverso)
ksort($cliente); //Ordena por llaves (Orden alfabético)
krsort($cliente); //Ordena por llaves (Orden alfabético inverso)

echo '<pre>';
var_dump($cliente);
echo '</pre>';



include 'includes/footer.php';