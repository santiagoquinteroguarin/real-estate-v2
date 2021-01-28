<?php 
    require '../../includes/functions.php';
    addTemplate('header');
?>

    <main class="container section">
        <h1>Crear</h1>

        <a href="/admin" class="button green-button">Volver</a>

        <form class="form">
            <fieldset>
                <legend>Información General</legend>

                <label for="title">Titulo</label>
                <input type="text" id="title" placeholder="Titulo Propiedad">

                <label for="price">Precio</label>
                <input type="number" id="price" placeholder="Precio Propiedad">
            
                <label for="image">Imagen</label>
                <input type="file" id="file" accept="image/jpeg, image/png">

                <label for="description">Descripción</label>
                <textarea id="description"></textarea>
            </fieldset>

            <fieldset>
                <legend>Información Propiedad</legend>

                <label for="rooms">Habitaciones:</label>
                <input type="number" id="rooms" placeholder="Ej: 3" min="1" max="9">

                <label for="wc">Baños:</label>
                <input type="number" id="wc" placeholder="Ej: 3" min="1" max="9">

                <label for="parking">Estacionamiento:</label>
                <input type="number" id="parking" placeholder="Ej: 3" min="1" max="9">
            </fieldset>

            <fieldset>
                <legend>Vendedor</legend>

                <select id="seller">
                    <option value="1">Santiago</option>
                    <option value="2">Camilo</option>
                </select>
            </fieldset>

            <input class="button green-button" type="submit" value="Crear Propiedad">

        </form>
    </main>

<?php addTemplate('footer'); ?>