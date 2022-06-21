<?php    
declare(strict_types=1);

include 'includes/header.php';



function sumar(int $numero1 = 0,int $numero2 =0){
    echo $numero1+$numero2;
}

sumar(numero2:20,numero1:9); //Parámetros nombrados No hace falta el signo de dolar $
echo '<br>';




include 'includes/footer.php';