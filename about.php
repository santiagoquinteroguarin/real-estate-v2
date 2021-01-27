<?php 
    require './includes/functions.php';
    addTemplate('header');
?>

    <main class="container section">
        <h1>Conoce sobre Nosotros</h1>

        <div class="about-content">
            <div class="image">
                <picture>
                    <source srcset="./build/img/nosotros.webp" type="image/webp">
                    <source srcset="./build/img/nosotros.jpg" type="image/jpeg">
                    <img loading="lazy" src="./build/img/nosotros.jpg" alt="Imagen sobre nosotros">
                </picture>
            </div>
            <div class="about-text">
                <blockquote>
                    25 años de experiencia
                </blockquote>

                <p>
                    Lorem ipsum, dolor sit amet consectetur adipisicing elit. Quo, aspernatur non facere illum ratione
                    aperiam fugit dolor. Rerum hic ipsum laborum vero ratione eveniet voluptatem itaque, ipsa
                    consequuntur consequatur. Nihil recusandae inventore, ipsam repudiandae consequuntur magni minus,
                    quas distinctio debitis facere placeat molestias repellendus velit reprehenderit at quos, ab
                    aspernatur dolore impedit voluptatum. Dolorem, beatae nostrum. Veniam, ex laborum! Praesentium
                    quia nobis nostrum ipsum alias commodi reprehenderit, hic neque, amet eveniet quam esse
                    et. Iure.
                </p>
                <p>
                    dolorum culpa deserunt eum! Accusamus voluptatibus illo eligendi quas provident ullam odio tempora
                    necessitatibus iusto, sed assumenda similique quod! Doloribus assumenda dolore quasi quas,
                    perspiciatis quia nobis nostrum ipsum alias commodi reprehenderit, hic neque, amet eveniet quam esse
                    et. Iure.
                </p>
            </div>
        </div>
    </main>

    <section class="container section">
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
    </section>

    <?php addTemplate('footer'); ?>

    <script src="./build/js/bundle.min.js"></script>
</body>

</html>