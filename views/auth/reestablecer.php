<main class="auth">
    <h2 class="auth__heading"><?php echo $titulo ?></h2>
    <p class="auth__texto">Reestablece tu contraseña</p>


    <?php

    require_once __DIR__ . '/../templates/alertas.php';

    ?>


    <?php if ($token_valido) { ?>
        <form method="POST" class="formulario">
            <div class="formulario__campo">
                <label for="" class="formulario__label">Nuevo Password</label>

                <input type="password" class="formulario__input" placeholder="" id="password" name="password">
            </div>


            <input type="submit" class="formulario__submit" value="Envias Instrucciones">
        </form>
    <?php } ?>

    <div class="acciones">
        <a href="/login" class="acciones__enlace">Iniciar Sesión</a>
        <a href="/registro" class="acciones__enlace">¿Aún no tienes una cuenta? Registrarse</a>

    </div>


</main>