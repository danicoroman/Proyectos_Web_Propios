<?php include 'includes/templates/header.php' ?>

    <main class="contenedor seccion contenido-centrado">
        <h1>Casa en Venta frente al bosque</h1>
        <source srcset="build/img/destacada.webp" type="image/webp">
        <picture>
            <source srcset="build/img/destacada.webp" type="image/webp">
            <source srcset="build/img/destacada.jpg" type="image/jpeg">
            <img loading="lazy" src="build/img/destacada.jpg" alt="Imagen de la Propiedad">
        </picture>
        <div class="resumen-propiedad">
            <p class="precio">120.000€</p>
            <ul class="iconos-caracteristicas">
                <li><img class="icono" src="build/img/icono_wc.svg" loading="lazy" alt="icono wc">
                    <p>3</p>
                </li>
                <li><img class="icono" src="build/img/icono_estacionamiento.svg" loading="lazy" alt="icono estacionamiento">
                    <p>3</p>
                </li>
                <li><img class="icono" src="build/img/icono_dormitorio.svg" loading="lazy" alt="icono habitaciones">
                    <p>3</p>
                </li>
            </ul>
            <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Cumque minima qui minus perspiciatis aspernatur tempore voluptatum quasi quod, dolorem tempora eius suscipit, velit ex eum obcaecati impedit numquam libero dignissimos recusandae ut
                similique repellendus! Corporis sunt aperiam impedit praesentium, ullam eveniet illum tempore non, quos, saepe voluptate quae fugiat ad aspernatur esse rem. Nulla dicta nostrum ratione aut ipsa, distinctio, cum nisi rerum voluptate illum
                officiis praesentium facilis, asperiores libero saepe? Doloribus earum culpa repellendus.</p>
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Atque modi architecto vitae commodi adipisci illum, ullam magni eius omnis delectus perferendis consectetur, perspiciatis in harum fugit blanditiis saepe velit explicabo, officiis nesciunt
                error aut ipsum? Debitis provident dolore est itaque sequi repellat quibusdam sit fuga? Illo deleniti dolores distinctio mollitia?</p>
        </div>

    </main>

    <?php include 'includes/templates/footer.php' ?>
