<?php 
    require './includes/functions.php';
    addTemplate('header');
?>

    <main class="container section content-center">
        <h1>Contacto</h1>

        <picture>
            <source srcset="./build/img/destacada3.webp" type="image/webp">
            <source srcset="./build/img/destacada3.jpg" type="image/jpeg">
            <img loading="lazy" src="./build/img/destacada3.jpg" alt="Imagen contacto">
        </picture>

        <h2>Llene el formulario de Contacto</h2>

        <form class="form">
            <fieldset>
                <legend>Información Personal</legend>

                <label for="name">Nombre</label>
                <input id="name" type="text" placeholder="Tu Nombre">

                <label for="email">E-mail</label>
                <input id="email" type="email" placeholder="Tu Email">

                <label for="phone">Teléfono</label>
                <input id="phone" type="tel" placeholder="Tu Teléfono">

                <label for="message">Mensaje</label>
                <textarea id="message"></textarea>
            </fieldset>

            <fieldset>
                <legend>Información sobre la propiedad</legend>

                <label for="options">Vende o Compra:</label>
                <select id="options">
                    <option value="" disabled selected>--Seleccione--</option>
                    <option value="buy">Compra</option>
                    <option value="sell">Vende</option>
                </select>

                <label for="budget">Precio o Presupuesto</label>
                <input id="budget" type="number" placeholder="Tu Precio o Presupuesto">
            </fieldset>

            <fieldset>
                <legend>Contacto</legend>

                <p>Como desea ser contactado</p>
                <div class="form-contact">
                    <label for="contact-phone">Teléfono</label>
                    <input name="contact" type="radio" value="Telefono" id="contact-phone">

                    <label for="contact-email">Email</label>
                    <input name="contact" type="radio" value="Email" id="contact-email">
                </div>

                <p>Si eligió Teléfono, elija la fecha y la hora</p>

                <label for="date">Fecha</label>
                <input id="date" type="date">

                <label for="time">Hora</label>
                <input id="time" type="time" min="09:00" max="18:00">
            </fieldset>

            <input type="submit" class="green-button" value="Enviar">
        </form>
    </main>

    <?php addTemplate('footer'); ?>
