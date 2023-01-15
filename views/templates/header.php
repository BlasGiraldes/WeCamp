<header class="header">

    <div class="header__contenedor">

        <nav class="header__navegacion">

        <?php if(is_auth()){ ?>
            <a href="<?php echo is_admin() ? '/admin/dashboard' : '/finalizar-registro' ?>" class="header__enlace">Administrar</a>
            <form class="header__form" method="POST" action="/logout">
                <input type="submit" value="Cerrar Sesión" class="header__submit">
            </form>

        <?php } else { ?>
            <a href="/registro" class="header__enlace">Registro</a>
            <a href="/login" class="header__enlace">Iniciar Sesión</a>
            <?php } ?>
        </nav>
        

        <div class="header__contenido">

            <a href="/">
                <h1 class="header__logo">
                    &#60;WeCamp/>

                </h1>

            </a>

            <p class="header__texto">Mayo 5-6 - 2023</p>
            <p class="header__texto header__texto--modalidad">En Línea - Presencial</p>

            <a href="/registro" class="header__boton">Comprar Entradas</a>

        </div>

    </div>



</header>

<div class="barra">

    <div class="barra__contenido">

        <a  href="/">

        <h2 class="barra__logo">&#60;WeCamp/></h2>


        </a>

        <nav class="navegacion">

        <a href="/wecamp" class="navegacion__enlace <?php echo pagina_actual('/wecamp') ? 'navegacion__enlace--actual' : ''?>">Evento</a>
        <a href="/pases" class="navegacion__enlace <?php echo pagina_actual('/pases') ? 'navegacion__enlace--actual' : ''?>">Pases</a>
        <a href="/workshops-conferencias" class="navegacion__enlace <?php echo pagina_actual('/workshops-conferencias') ? 'navegacion__enlace--actual' : ''?>">WorkShops / Conferencias</a>
        <a href="/registro" class="navegacion__enlace <?php echo pagina_actual('/registro') ? 'navegacion__enlace--actual' : ''?>">Comprar Entradas</a>

        </nav>

    </div>


</div>
