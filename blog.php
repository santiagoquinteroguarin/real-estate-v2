<?php 
    require './includes/functions.php';
    addTemplate('header');
?>

    <main class="container section content-center">
        <h1>Nuestro Blog</h1>

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

        <article class="blog-entry">
            <div class="image">
                <picture>
                    <source srcset="./build/img/blog3.webp" type="image/webp">
                    <source srcset="./build/img/blog3.jpg" type="image/jpeg">
                    <img loading="lazy" src="./build/img/blog3.webp" alt="Texto entrada blog">
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
                    <source srcset="./build/img/blog4.webp" type="image/webp">
                    <source srcset="./build/img/blog4.jpg" type="image/jpeg">
                    <img loading="lazy" src="./build/img/blog4.webp" alt="Texto entrada blog">
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
    </main>

    <?php addTemplate('footer'); ?>
    
    <script src="./build/js/bundle.min.js"></script>
</body>
</html>