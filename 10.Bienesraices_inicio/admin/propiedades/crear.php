<?php 
//Base de Datos
require '../../includes/config/database.php';
$db = conectarDB();




if($_SERVER['REQUEST_METHOD'] === 'POST'){
        //     echo '<pre>';
        // var_dump($_POST);
        // echo '</pre>';

        $titulo = $_POST['titulo'];
        $precio = $_POST['precio'];
        // $imagen = $_POST['imagen'];
        $descripcion = $_POST['descripcion'];
        $habitaciones = $_POST['habitaciones'];
        $wc = $_POST['wc'];
        $estacionamiento = $_POST['estacionamiento'];
        $vendedorId = $_POST['vendedor'];

        //Insertar en la Base de Datos
        $query = "INSERT INTO propiedades (titulo,precio,descripcion,habitaciones,wc,estacionamiento,vendedorId) VALUES ('$titulo', '$precio', '$descripcion', '$habitaciones', '$wc', '$estacionamiento', '$vendedorId');" ;
        // echo $query;
        $resultado = mysqli_query($db, $query);

        if($resultado){
            echo 'Insertado correctamente';
        }
}


require '../../includes/funciones.php';

incluirTemplate('header');
?>

    <main class="contenedor seccion">
        <h1>Crear</h1>

        <a href="/admin" class="boton boton-verde">Volver</a>

        <form action="/admin/propiedades/crear.php" method="POST" class="formulario">
            <fieldset>
                <legend>Información General</legend>
                <label for="titulo">Título:</label>
                <input type="text" name="titulo" id="titulo" placeholder="Título Propiedad">

                <label for="precio">Precio:</label>
                <input type="number" name="precio" id="precio" placeholder="Precio Propiedad">

                <label for="imagen">Imagen:</label>
                <input type="file" id="imagen" name="imagen" accept="image/jpeg, image/png">

                <label for="descripcion">Descripción:</label>
                <textarea name="descripcion"  id="descripcion"></textarea>
            </fieldset>

            <fieldset>
                <legend>Información de la Propiedad</legend>
                <label for="habitaciones">Habitaciones:</label>
                <input type="number" name="habitaciones" id="habitaciones" placeholder="Ej: 3" min="1" max="9">
                
                <label for="wc">Baños:</label>
                <input type="number" name="wc" id="wc" placeholder="Ej: 3" min="1" max="3">

                <label for="estacionamiento">Estacionamiento:</label>
                <input type="number" name="estacionamiento" id="estacionamiento" placeholder="Ej: 3" min="1" max="9">

            </fieldset>

            <fieldset>
                <legend>Vendedor</legend>
                <select name="vendedor">
                    <option value="1">Dani</option>
                    <option value="2">Karen</option>
                </select>
            </fieldset>

            <input type="submit" value="Crear Propiedad" class="boton boton-verde">
        </form>

    </main>

    <?php incluirTemplate('footer'); ?>
