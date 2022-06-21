<?php include 'includes/header.php';

$cliente = [
    'nombre' => 'Dani',
    'saldo' => 200,
    'informacion' => [
        'tipo' => 'premium'
    ]
];

echo '<pre>';
var_dump($cliente);
echo '</pre>';

// echo $cliente['nombre'];
// echo $cliente['informacion']['tipo'];

$cliente['codigo'] = 12320241354;


echo '<pre>';
var_dump($cliente);
echo '</pre>';


include 'includes/footer.php';
