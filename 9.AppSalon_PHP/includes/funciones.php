<?php

function obtenerServicios() {
    try {
        //Importar una conexión
        require 'database.php';

        //Escribir el código SQL
        $sql = 'SELECT * FROM servicios';
        $consulta = mysqli_query($db,$sql);
        

        //Obtener los resultados
        echo '<pre>';
        var_dump(mysqli_fetch_assoc($consulta));
        echo '</pre>';
    } catch (\Throwable $th) {
        var_dump($th) ;
    }
}

obtenerServicios();