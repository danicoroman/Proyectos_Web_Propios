<?php include 'includes/header.php';

//While
$i = 0; //Iterador

while($i < 10){
    // echo $i .'<br>';

    $i++; //Incremento
}

echo '<br>';
//Do While

$i =0;

do {
    // echo $i .'<br>';
   
   $i++; 
} while ($i < 10);

// echo '<br>';


//For Loop

for ($i=1; $i < 100; $i++) { 
    if ($i % 3 ==0 && $i % 5 ==0) {
        echo $i . '-Fizz Buzz <br>';

    }
    elseif($i % 3 == 0){
        echo $i . '-Fizz <br>';
    } elseif ($i % 5 == 0) {
        echo $i . '-Buzz <br>';

    }
}



//For Each Loop
$clientes = array('Dani', 'Juan', 'Karen');

foreach ($clientes as $cliente) {
    echo $cliente . '<br>';
}


echo count($clientes);


$cliente = [
    'nombre' => 'Dani',
    'saldo' => 200,
    'tipo' => 'Premium'  
];
echo '<br>';
foreach ($cliente as $key => $valor) {
    echo $key . "-" . $valor . '<br>';
}


include 'includes/footer.php';