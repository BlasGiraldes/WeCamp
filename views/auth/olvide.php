<main class="auth">
    <h2 class="auth__heading"><?php echo $titulo ?></h2>
    <p class="auth__texto">Recupera tu acceso a WeCamp</p>


    <?php

    require_once __DIR__ . '/../templates/alertas.php';

    ?>
    <form action="/olvide" method="POST" class="formulario">
        <div class="formulario__campo">
            <label for="" class="formulario__label">Email</label>

            <input type="email" class="formulario__input" placeholder="Tu Email" id="email" name="email">
        </div>


        <input type="submit" class="formulario__submit" value="Envias Instrucciones">
    </form>


    <div class="acciones">
        <a href="/login" class="acciones__enlace">Iniciar Sesión</a>
        <a href="/registro" class="acciones__enlace">¿Aún no tienes una cuenta? Registrarse</a>

    </div>
</main>