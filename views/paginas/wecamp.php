<main class="wecamp">
    <h2 class="wecamp__heading"><?php echo $titulo; ?></h2>
    <p class="wecamp__descripcion">Conoce la conferencia más importante de Latinoamérica</p>

    <div <?php aos_animacion() ?> class="wecamp__grid">
        <div class="wecamp__imagen">

            <picture>
                <source srcset="build/img/sobre_wecamp.avif" type="image/avif">
                <source srcset="build/img/sobre_wecamp.webp" type="image/webp">
                <img loading="lazy" width="200" height="300" src="build/img/sobre_wecamp.jpg" alt="Imagen WeCamp">

            </picture>

        </div>

        <div <?php aos_animacion() ?> class="wecamp__contenido">
                <p <?php aos_animacion() ?> class="wecamp__texto">WeCamp es una conferencia anual para desarrolladores de todos los niveles. Se lleva a cabo tanto de forma presencial como en línea, ofreciendo una amplia variedad de charlas y talleres para mejorar habilidades y conocimientos en el campo de la tecnología. Es una oportunidad para conectarse con otros profesionales del sector y aprender de los líderes de la industria.</p>
                <p <?php aos_animacion() ?> class="wecamp__texto">WeCamp también ofrece una amplia variedad de temas y tecnologías para cubrir, desde programación web y móvil hasta inteligencia artificial y ciberseguridad. Los asistentes pueden esperar escuchar de expertos en la industria y participar en discusiones y debates enfocados en los desafíos y tendencias actuales en el mundo de la tecnología. También cuenta con una oportunidad para los asistentes de networking y conectarse con otros desarrolladores y profesionales de la industria. </p>

        </div>
    </div>
</main>