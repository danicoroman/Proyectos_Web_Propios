<?php declare(strict_types=1);
include 'includes/header.php';



function usuarioAutenticado(bool $autenticado) : void{  //No retorna nada
    if($autenticado){
        echo 'El usuario está autenticado';
    }else{
        echo 'No autenticado';
    }
}


$usuario= usuarioAutenticado(true);
echo $usuario;


include 'includes/footer.php';