<?php 
require 'includes/config/database.php';
$db = conectarDB();
//Autenticar usuario

$errores = [];
if($_SERVER['REQUEST_METHOD'] === 'POST'){

    $email = mysqli_real_escape_string($db, filter_var($_POST['email'],FILTER_VALIDATE_EMAIL));
    $password = mysqli_real_escape_string($db,$_POST['password']);

    if(!$email){
        $errores[] = 'El email es obligatorio o no es válido';
    }
    if(!$password){
        $errores[] = 'El password es obligatorio';
    }

    if(empty($errores)){
        
    }

}


//Incluye el header
require 'includes/funciones.php';
incluirTemplate('header');
?>

    <main class="contenedor seccion contenido-centrado">
        <h1>Iniciar Sesión</h1>

        <?php foreach($errores as $error): ?>
            <div class="alerta error">
                <?php echo $error ?>
            </div>
        <?php endforeach; ?>

        <form method="POST" class="formulario">
        <fieldset>
                <legend>Email y Password</legend>

                <label for="email">E-mail</label>
                <input type="email" id="email" placeholder="Tu Email" name="email">

                <label for="telefono">Password</label>
                <input type="password" id="password" placeholder="Tu Password" name="password">
            </fieldset>
            <input type="submit" value="Iniciar Sesión" class="boton boton-verde">
        </form>
    </main>

    <?php incluirTemplate('footer'); ?>
