<?php 
    require './includes/functions.php';
    addTemplate('header');
?>

    <main class="container section content-center">
        <h1>Guía para la decoración de tu hogar</h1>

        <picture>
            <source srcset="./build/img/destacada2.webp" type="image/webp">
            <source srcset="./build/img/destacada2.jpg" type="image/jpeg">
            <img src="./build/img/destacada2.jpg" alt="anuncio">
        </picture>

        <p class="information-meta">Escrito el: <span>20/10/2021</span> por: <span>Admin</span></p>

        <div class="summary-property">
            <p>
                Lorem ipsum dolor, sit amet consectetur adipisicing elit. Nemo, eius? Inventore voluptatum voluptatem
                at. Vero, quae quibusdam hic mollitia, ullam consequatur doloremque beatae officia voluptas laboriosam
                nulla illo culpa a magni veritatis rerum commodi accusantium fugit aliquam dignissimos earum in quos
                maxime ex. Pariatur eos et exercitationem accusamus natus quo, animi earum quas in magnam porro eveniet
                laudantium rem ratione assumenda. Deserunt, doloribus laudantium officiis magni ab ratione iste
                aspernatur quam culpa tempora numquam at facere molestias incidunt eos non perspiciatis, iure illo error
                aut voluptates earum. Porro maiores modi iure, saepe minima numquam sunt possimus tempore, dolorem est
                quas!
            </p>

            <p>
                laudantium rem ratione assumenda. Deserunt, doloribus laudantium officiis magni ab ratione iste
                aspernatur quam culpa tempora numquam at facere molestias incidunt eos non perspiciatis, iure illo error
                aut voluptates earum. Porro maiores modi iure, saepe minima numquam sunt possimus tempore, dolorem est
                quas!
            </p>
        </div>
    </main>

    <?php addTemplate('footer'); ?>
    
    <script src="./build/js/bundle.min.js"></script>
</body>
</html>