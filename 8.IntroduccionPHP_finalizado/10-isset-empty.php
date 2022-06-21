<?php include 'includes/header.php';

$clientes= [];
$clientes2 = array();
$clientes3 = array('Dani', 'Juan', 'Karen');
$cliente = [
    'nombre' => 'Dani',
    'saldo' => 200
];

//Empty - Revisa si un Array está vacío

var_dump(empty($clientes));
var_dump(empty($clientes3));
var_dump(empty($clientes2));

//Isset - Revisar si un Array está creado o una propiedad de un Array asociativo existe

echo '<br>';
var_dump(isset($clientes4));
var_dump(isset($clientes));
var_dump(isset($clientes2));
var_dump(isset($clientes3));
var_dump(isset($cliente['nombre']));
var_dump(isset($cliente['codigo']));






include 'includes/footer.php';