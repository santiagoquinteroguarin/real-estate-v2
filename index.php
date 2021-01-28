<?php 
    require 'includes/functions.php';
    addTemplate('header', $start = true);
?>

    <main class="container section">
        <h1>Más Sobre Nosotros</h1>

        <div class="about-icons">
            <div class="icon">
                <img src="./build/img/icono1.svg" alt="Icono Seguridad">
                <h3>Seguridad</h3>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Animi dolore voluptatum cumque consequuntur
                    officia non voluptate vel. Beatae, similique officia.
                    officia non voluptate vel.
                </p>
            </div>
            <div class="icon">
                <img src="./build/img/icono2.svg" alt="Icono Precio">
                <h3>Precio</h3>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Animi dolore voluptatum cumque consequuntur
                    officia non voluptate vel. Beatae, similique officia.
                    officia non voluptate vel.
                </p>
            </div>
            <div class="icon">
                <img src="./build/img/icono3.svg" alt="Icono Tiempo">
                <h3>A Tiempo</h3>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Animi dolore voluptatum cumque consequuntur
                    officia non voluptate vel. Beatae, similique officia.
                    officia non voluptate vel.
                </p>
            </div>
        </div>
    </main>

    <section class="section container">
        <h2>Casas y Departamentos en Venta</h2>

        <?php 
            $limit = 3;
            include './includes/templates/ads.php';
        ?>

        <div class="align-right">
            <a href="./ads.php" class="green-button">Ver Todas</a>
        </div>
    </section>

    <section class="contact-img">
        <h2>Encuentra la casa de tus sueños</h2>
        <p>Llena el formulario de contacto y un asesor se pondrá en contacto contigo a la brevedad</p>
        <a href="./contact.php" class="yellow-button">Contactanos</a>
    </section>

    <div class="container section section-lower">
        <section class="blog">
            <h3>Nuestro Blog</h3>

            <article class="blog-entry">
                <div class="image">
                    <picture>
                        <source srcset="./build/img/blog1.webp" type="image/webp">
                        <source srcset="./build/img/blog1.jpg" type="image/jpeg">
                        <img loading="lazy" src="./build/img/blog1.webp" alt="Texto entrada blog">
                    </picture>
                </div>

                <div class="text-entry">
                    <a href="entry.php">
                        <h4>Terraza en el techo de tu casa</h4>
                        <p class="information-meta">Escrito el: <span>20/10/2021</span> por: <span>Admin</span></p>
                        <p>
                            Consejos para construir una terraza en el techo de tu casa con los mejores materiales y
                            ahorrando dinero
                        </p>
                    </a>
                </div>
            </article>

            <article class="blog-entry">
                <div class="image">
                    <picture>
                        <source srcset="./build/img/blog2.webp" type="image/webp">
                        <source srcset="./build/img/blog2.jpg" type="image/jpeg">
                        <img loading="lazy" src="./build/img/blog2.webp" alt="Texto entrada blog">
                    </picture>
                </div>

                <div class="text-entry">
                    <a href="entry.php">
                        <h4>Guía para la decoración de tu hogar</h4>
                        <p class="information-meta">Escrito el: <span>20/10/2021</span> por: <span>Admin</span></p>
                        <p>
                            Maximiza el espacio en tu hogar con esta guia, aprende a cambiar muebles y colores para
                            darle vida a tu espacio
                        </p>
                    </a>
                </div>
            </article>
        </section>

        <section class="testimonials">
            <h3>testimoniales</h3>

            <div class="testimonial">
                <blockquote>
                    El personal se comportó de una excelente forma, muy buena atención y la casa que me ofrecieron
                    cumple con todas mis expectativas.
                </blockquote>
                <p>- Santiago Quintero Guarin</p>
            </div>
        </section>
    </div>

    <?php addTemplate('footer'); ?>