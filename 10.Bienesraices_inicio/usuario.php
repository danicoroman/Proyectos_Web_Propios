<?php

//Importar la conexion
require 'includes/config/database.php';
$db = conectarDB();

//Crear email y passwrod
$email = "correo@correo.com";
$password = "123456";

$passwordHash = password_hash($password, PASSWORD_DEFAULT);

//Query para crear el usuario
$query = "INSERT INTO usuarios (email,password) VALUES ('${email}', '${passwordHash}');";

//Agregarlo a la Base de Datos
$resultado = mysqli_query($db,$query);