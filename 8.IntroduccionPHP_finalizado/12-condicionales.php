<?php include 'includes/header.php';

$autenticado = false;
$admin = true;

if($autenticado || $admin){
    echo 'Usuario autenticado correctamente';
}else{
    echo 'Usuario no autenticado, inicia sesión';
}


//If anidados...

$cliente = [
    'nombre' => 'Dani',
    'saldo' => 200,
    'informacion' => [
        'tipo'=>'Premium'
    ]   
];

if(!empty($cliente)){
    echo 'El array de cliente no está vacío';

    if($cliente['saldo'] > 0)
    {
        echo '<br>';
        echo 'El Cliente tiene Saldo disponible';
    }
    else{
        echo '<br>';
        echo 'No hay saldo';
    }
}

//Else if
echo '<br>';

if($cliente['saldo'] > 0){
    echo 'El Cliente tiene saldo';
}elseif ($cliente['informacion']['tipo'] === 'Premium') {
    echo 'El cliente es Premium';
}else {
    echo 'No hay cliente premium o con saldo';
}

//Switch

echo '<br>';


$tecnologia = 'HTML';

switch ($tecnologia) {
    case 'PHP':
        echo 'PHP, un excelente lenguaje';
        break;
    case 'JavaScript':
        echo 'El lenguaje de la web';
        break;
    case 'HTML':
        echo 'No es un lenguaje de programación';
        break;
    
    default:
    echo 'Algún lenguaje que no sé cuál es';

        break;
}





include 'includes/footer.php';