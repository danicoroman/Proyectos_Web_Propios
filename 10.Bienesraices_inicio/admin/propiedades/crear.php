<?php 
//Base de Datos
require '../../includes/config/database.php';
$db = conectarDB();

//Consultar pra obtener los vendedores

$consulta = "SELECT * FROM vendedores";
$resultado = mysqli_query($db,$consulta);

//Array con mensajes de errores

$errores=[];

        $titulo = '';
        $precio = '';
        $descripcion = '';
        $habitaciones = '';
        $wc ='' ;
        $estacionamiento = '';
        $vendedorId = '';

//Ejecutar el código después de que el usuario mande el formulario
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

        if(!$titulo){
            $errores[] = "Debes añadir un título";
        }
        if(!$precio){
            $errores[] = "El Precio es Obligatorio";
        }
        if(strlen($descripcion) < 50){
            $errores[] = "La Descripción es Obligatoria y debe tener al menos 50 caracteres";
        }

        if(!$habitaciones){
            $errores[] = "El Número de Habitaciones es Obligatorio";
        }
        if(!$wc){
            $errores[] = "El Número de Baños es Obligatorio";
        }
        if(!$estacionamiento){
            $errores[] = "El Número de Lugares de Estacionamiento es Obligatorio";
        }
        if(!$vendedorId){
            $errores[] = "Elige un vendedor";
        }
        //       echo '<pre>';
        //  var_dump($errores);
        //  echo '</pre>';


        //Revisar que el array de errores esté vacío
        if(empty($errores)){
            //Insertar en la Base de Datos
            $query = "INSERT INTO propiedades (titulo,precio,descripcion,habitaciones,wc,estacionamiento,vendedorId) VALUES ('$titulo', '$precio', '$descripcion', '$habitaciones', '$wc', '$estacionamiento', '$vendedorId');" ;
            // echo $query;
            $resultado = mysqli_query($db, $query);

            if($resultado){
                echo 'Insertado correctamente';
            }
        }
        

        
}


require '../../includes/funciones.php';

incluirTemplate('header');
?>

    <main class="contenedor seccion">
        <h1>Crear</h1>

        <a href="/admin" class="boton boton-verde">Volver</a>

        <?php  foreach($errores as $error): ?>
            <div class="alerta error">
            <?php echo $error; ?>

            </div>
        <?php endforeach; ?>

        <form action="/admin/propiedades/crear.php" method="POST" class="formulario">
            <fieldset>
                <legend>Información General</legend>
                <label for="titulo">Título:</label>
                <input type="text" name="titulo" id="titulo" placeholder="Título Propiedad" value="<?php echo $titulo; ?>">

                <label for="precio">Precio:</label>
                <input type="number" name="precio" id="precio" placeholder="Precio Propiedad" value="<?php echo $precio; ?>">

                <label for="imagen">Imagen:</label>
                <input type="file" id="imagen" name="imagen" accept="image/jpeg, image/png">

                <label for="descripcion">Descripción:</label>
                <textarea name="descripcion"  id="descripcion"><?php echo $descripcion; ?></textarea>
            </fieldset>

            <fieldset>
                <legend>Información de la Propiedad</legend>
                <label for="habitaciones">Habitaciones:</label>
                <input type="number" name="habitaciones" id="habitaciones" placeholder="Ej: 3" min="1" max="9" value="<?php echo $habitaciones; ?>">
                
                <label for="wc">Baños:</label>
                <input type="number" name="wc" id="wc" placeholder="Ej: 3" min="1" max="3" value="<?php echo $wc; ?>">

                <label for="estacionamiento">Estacionamiento:</label>
                <input type="number" name="estacionamiento" id="estacionamiento" placeholder="Ej: 3" min="1" max="9" value="<?php echo $estacionamiento; ?>">

            </fieldset>

            <fieldset>
                <legend>Vendedor</legend>
                <select name="vendedor">
                    <option value="">--Seleccione--</option>
                    <?php while($vendedor = mysqli_fetch_assoc($resultado)): ?>
                        <option <?php echo $vendedorId === $vendedor['id'] ? 'selected' : ''; ?>  value="<?php echo $vendedor['id']; ?>"><?php echo $vendedor['nombre'] . " " . $vendedor['apellido']; ?></option>


                    <?php endwhile; ?>
                </select>
            </fieldset>

            <input type="submit" value="Crear Propiedad" class="boton boton-verde">
        </form>

    </main>

    <?php incluirTemplate('footer'); ?>
