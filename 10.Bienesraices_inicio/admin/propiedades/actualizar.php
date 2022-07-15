<?php 


//VAlidar la URL por Id válida
$id = $_GET['id'];
    $id = filter_var($id, FILTER_VALIDATE_INT);
    if(!$id){
        header('Location: /admin');
    }

//Base de Datos
require '../../includes/config/database.php';
$db = conectarDB();


//Obtener los datos de la propiedad
$consulta = "SELECT * FROM propiedades WHERE id = ${id}";
$resultado = mysqli_query($db,$consulta);
$propiedad = mysqli_fetch_assoc($resultado);



//Consultar pra obtener los vendedores

$consulta = "SELECT * FROM vendedores";
$resultado = mysqli_query($db,$consulta);

//Array con mensajes de errores

$errores=[];

        $titulo = $propiedad['titulo'];
        $precio = $propiedad['precio'];
        $descripcion = $propiedad['descripcion'];
        $habitaciones = $propiedad['habitaciones'];
        $wc =$propiedad['wc'] ;
        $estacionamiento = $propiedad['estacionamiento'];
        $vendedorId = $propiedad['vendedorId'];
        $imagenPropiedad = $propiedad['imagen'];


        //Ejecutar el código después de que el usuario mande el formulario
        if($_SERVER['REQUEST_METHOD'] === 'POST'){
        //     echo '<pre>';
        // var_dump($_POST);
        // echo '</pre>';

        $titulo = mysqli_real_escape_string($db, $_POST['titulo']);
        $precio = mysqli_real_escape_string($db,$_POST['precio']);
        $descripcion = mysqli_real_escape_string($db,$_POST['descripcion']);
        $habitaciones = mysqli_real_escape_string($db,$_POST['habitaciones']);
        $wc = mysqli_real_escape_string($db,$_POST['wc']);
        $estacionamiento = mysqli_real_escape_string($db,$_POST['estacionamiento']);
        $vendedorId = mysqli_real_escape_string($db,$_POST['vendedor']);
        $creado = date('Y/m/d');

        //Asignar files hacia una variable
        $imagen = $_FILES['imagen'];
       

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
       

        //Validar por tamaño (100kb máximo)
        $medida =1000*100;
        if($imagen['size'] > $medida){
            $errores[] = "La Imagen es muy Pesada";
        }




        //       echo '<pre>';
        //  var_dump($errores);
        //  echo '</pre>';


        //Revisar que el array de errores esté vacío
         if(empty($errores)){
         //SUBIDA DE ARCHIVOS

        


             //Crear carpeta
             $carpetaImagenes = '../../imagenes/';

             if(!is_dir($carpetaImagenes)){
                mkdir($carpetaImagenes);
             }

             $nombreImagen = '';

             if($imagen['name']){
                //Eliminar la imagen previa
                unlink($carpetaImagenes . $propiedad['imagen']);
    
                //Generar un nombre único
                $nombreImagen = md5(uniqid(rand(),true)) . '.jpg';

                //Subir la imagen
                move_uploaded_file($imagen['tmp_name'], $carpetaImagenes . $nombreImagen);
             }else{
                $nombreImagen = $propiedad['imagen'];
             }

          
            
            //Insertar en la Base de Datos
            $query = "UPDATE propiedades SET titulo = '${titulo}', precio = '${precio}', imagen = '${nombreImagen}', descripcion = '${descripcion}', habitaciones = ${habitaciones}, wc = ${wc}, estacionamiento = ${estacionamiento}, vendedorId = ${vendedorId} WHERE id = ${id};" ;
            // echo $query;
            $resultado = mysqli_query($db, $query);

            if($resultado){
                //Redireccionar al usuario
                header('Location:/admin?resultado=2');
            }
        }
    }
        

        



require '../../includes/funciones.php';

incluirTemplate('header');
?>

    <main class="contenedor seccion">
        <h1>Actualizar Propiedad</h1>

        <a href="/admin" class="boton boton-verde">Volver</a>

        <?php  foreach($errores as $error): ?>
            <div class="alerta error">
            <?php echo $error; ?>

            </div>
        <?php endforeach; ?>

        <form method="POST" class="formulario" enctype="multipart/form-data">
            <fieldset>
                <legend>Información General</legend>
                <label for="titulo">Título:</label>
                <input type="text" name="titulo" id="titulo" placeholder="Título Propiedad" value="<?php echo $titulo; ?>">

                <label for="precio">Precio:</label>
                <input type="number" name="precio" id="precio" placeholder="Precio Propiedad" value="<?php echo $precio; ?>">

                <label for="imagen">Imagen:</label>
                <input type="file" id="imagen" name="imagen" accept="image/jpeg, image/png" name="imagen">

                <img src="/imagenes/<?php echo $propiedad['imagen']; ?>" class="imagen-small">

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

            <input type="submit" value="Actualizar Propiedad" class="boton boton-verde">
        </form>

    </main>

    <?php incluirTemplate('footer'); ?>
