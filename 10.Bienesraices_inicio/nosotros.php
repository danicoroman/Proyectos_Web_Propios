<?php 
require 'includes/funciones.php';
incluirTemplate('header');
?>

    <main class="contenedor seccion">
        <h1>Conoce sobre Nosotros</h1>

        <div class="contenido-nosotros">
            <div class="imagen">
                <picture>
                    <source srcset="build/img/nosotros.webp" type="image/webp">
                    <source srcset="build/img/nosotros.jpg" type="image/jpeg">
                    <img loading="lazy" src="build/img/nosotros.jpg" alt="Sobre Nosotros">
                </picture>
            </div>
            <div class="texto-nosotros">
                <blockquote>
                    25 Años de Experiencia
                </blockquote>
                <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Cumque minima qui minus perspiciatis aspernatur tempore voluptatum quasi quod, dolorem tempora eius suscipit, velit ex eum obcaecati impedit numquam libero dignissimos recusandae
                    ut similique repellendus! Corporis sunt aperiam impedit praesentium, ullam eveniet illum tempore non, quos, saepe voluptate quae fugiat ad aspernatur esse rem. Nulla dicta nostrum ratione aut ipsa, distinctio, cum nisi rerum voluptate
                    illum officiis praesentium facilis, asperiores libero saepe? Doloribus earum culpa repellendus.</p>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Atque modi architecto vitae commodi adipisci illum, ullam magni eius omnis delectus perferendis consectetur, perspiciatis in harum fugit blanditiis saepe velit explicabo, officiis
                    nesciunt error aut ipsum? Debitis provident dolore est itaque sequi repellat quibusdam sit fuga? Illo deleniti dolores distinctio mollitia?</p>
            </div>
        </div>
    </main>
    <section class="contenedor seccion">
        <h1>Más Sobre Nosotros</h1>

        <div class="iconos-nosotros">
            <div class="icono">
                <img src="build/img/icono1.svg" alt="Icono Seguridad" loading="lazy">
                <h3>Seguridad</h3>
                <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Iste tempore labore reiciendis fuga unde ducimus dolores ea temporibus quo eos molestiae dolore praesentium omnis, ex esse.</p>
            </div>
            <div class="icono">
                <img src="build/img/icono2.svg" alt="Icono Precio" loading="lazy">
                <h3>Precio</h3>
                <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Iste tempore labore reiciendis fuga unde ducimus dolores ea temporibus quo eos molestiae dolore praesentium omnis, ex esse.</p>
            </div>
            <div class="icono">
                <img src="build/img/icono3.svg" alt="Icono Tiempo" loading="lazy">
                <h3>Tiempo</h3>
                <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Iste tempore labore reiciendis fuga unde ducimus dolores ea temporibus quo eos molestiae dolore praesentium omnis, ex esse.</p>
            </div>
        </div>
    </section>

    <?php incluirTemplate('footer'); ?>
