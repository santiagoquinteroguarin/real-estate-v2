<?php 
    require './includes/functions.php';
    addTemplate('header');
?>

    <main class="container section content-center">
        <h1>Iniciar Sesión</h1>

        <form class="form" action="">
        <fieldset>
                <legend>Email y Password</legend>

                <label for="email">E-mail</label>
                <input id="email" type="email" placeholder="Tu Email">

                <label for="password">Password</label>
                <input id="password" type="password" placeholder="Tu Password">
            </fieldset>

            <input type="submit" value="Iniciar Sesión" class="button green-button">
        </form>
    </main>

<?php 
    addTemplate('footer'); 
?>