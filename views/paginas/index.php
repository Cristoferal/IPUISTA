<main class="contenedor seccion">
    <h1>Más sobre nosotros</h1>

    <?php include 'iconos.php'; ?>

</main>

<section class="seccion contenedor">
    <h2>Eventos especiales</h2>

    <?php
        include 'listado.php';
    ?>

    <div class="alinear-derecha">
        <a href="/eventos" class="boton-verde">Ver todas</a>
    </div>
</section>

<section class="imagen-contacto">
    <h2>Nos encantaría saber de ti</h2>
    <p>Aquí encontrarás la mejor maneras de contactarnos</p>
    <a href="/contacto" class="boton-amarillo">Contáctanos</a>
</section>

<div class="contenedor seccion seccion-inferior">
    <section class="blog">
        <h3>Comunidad</h3>

        <article class="entrada-blog">
            <div class="imagen">
                <picture>
                    <source srcset="build/img/blog1.webp" type="imagen/webp">
                    <source srcset="build/img/blog1.jpg" type="imagen/jpeg">
                    <img loading="lazy" src="build/img/blog1.jpg" alt="Texto entrada blog">
                </picture>
            </div>

            <div class="texto-entrada">
                <a href="/nuestraComunidad">
                    <h4>Nuestra comunidad</h4>
                    <p>Somos una comunidad centrada en Cristo que busca amar y servir a otros lo mejor que podamos. Ven y únete a nosotros.</p>
                </a>
            </div>
        </article>

        <article class="entrada-blog">
            <div class="imagen">
                <picture>
                    <source srcset="build/img/blog2.webp" type="imagen/webp">
                    <source srcset="build/img/blog2.jpg" type="imagen/jpeg">
                    <img loading="lazy" src="build/img/blog2.jpg" alt="Texto entrada blog">
                </picture>
            </div>

            <div class="texto-entrada">
                <a href="/serviciosAdoracion">
                    <h4>Servicios de adoracion</h4>
                    <p>La Iglesia es un refugio del caos de la vida cotidiana. Asistir a los servicios dominicales nos da la oportunidad de 
                        enfocarnos en adorar a Dios y amar a nuestros semejantes.</p>
                </a>
            </div>
        </article>
    </section>

</div>