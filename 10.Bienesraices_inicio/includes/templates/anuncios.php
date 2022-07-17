<?php 
        //Importar la conexion
        require __DIR__ . '/../config/database.php';
        $db = conectarDB();

        //Consultar
        $query = "SELECT * FROM propiedades LIMIT ${limite}";

        //Obtener resultado
        $resultado = mysqli_query($db,$query);

        function truncate(string $texto, int $cantidad) : string
            {
                if(strlen($texto) >= $cantidad) {
                    return substr($texto, 0, $cantidad) ;
                } else {
                    return $texto;
                }
            }
?>
            <div class="contenedor-anuncios">
                <?php while($propiedad = mysqli_fetch_assoc($resultado)): ?>
                <div class="anuncio">
                   
                        <img src="/imagenes/<?php echo $propiedad['imagen']; ?>" alt="Anuncio" loading="lazy">
                    
                    <div class="contenido-anuncio">
                        <h3><?php echo $propiedad['titulo']; ?></h3>
                        <p><?php echo truncate( $propiedad['descripcion'], 54); ?></p>
                        <p class="precio"><?php echo $propiedad['precio']; ?> €</p>
                        <ul class="iconos-caracteristicas">
                            <li><img class="icono" src="build/img/icono_wc.svg" loading="lazy" alt="icono wc">
                                <p><?php echo $propiedad['wc']; ?></p>
                            </li>
                            <li><img class="icono" src="build/img/icono_estacionamiento.svg" loading="lazy" alt="icono estacionamiento">
                                <p><?php echo $propiedad['estacionamiento']; ?></p>
                            </li>
                            <li><img class="icono" src="build/img/icono_dormitorio.svg" loading="lazy" alt="icono habitaciones">
                                <p><?php echo $propiedad['habitaciones']; ?></p>
                            </li>
                        </ul>
                        <a href="anuncio.php" class="boton-amarillo-block">Ver Propiedad</a>
                    </div>
                    <!--.contenido-anuncio-->
                </div>
                <!--.anuncio-->
                <?php endwhile; ?>
            </div>
            <!--.contenedor-anuncios-->



   