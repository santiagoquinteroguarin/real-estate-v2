<?php 
    require './includes/functions.php';
    addTemplate('header');
?>

    <main class="container section content-center">
        <h1>Casa en Venta frente al bosque</h1>

        <picture>
            <source srcset="./build/img/destacada.webp" type="image/webp">
            <source srcset="./build/img/destacada.jpg" type="image/jpeg">
            <img src="./build/img/destacada.jpg" alt="anuncio">
        </picture>

        <div class="summary-property">
            <p class="price">$3,000,000</p>

            <ul class="icons-characteristics">
                <li>
                    <img class="icon" src="./build/img/icono_wc.svg" alt="Icono WC">
                    <p>3</p>
                </li>
                <li>
                    <img class="icon" src="./build/img/icono_estacionamiento.svg" alt="Icono estacionamiento">
                    <p>3</p>
                </li>
                <li>
                    <img class="icon" src="./build/img/icono_dormitorio.svg" alt="Icono dormitorio">
                    <p>4</p>
                </li>
            </ul>

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